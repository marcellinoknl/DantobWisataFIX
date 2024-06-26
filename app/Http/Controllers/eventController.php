<?php

namespace App\Http\Controllers;
use App\Models\counter;
use App\Models\EventWisata;
use App\Models\SampulEvent;
use Illuminate\Support\Facades\DB;
use App\Models\DeskripsiEventModel;
use App\Models\EventHeaders;
use App\Models\LikeEvent;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function indexAction()
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $sampul_event = DB::table('sampul_event')->get();
        $eventheaders = DB::table('event_headers')->get();
        $deskripsi = DB::table('deskripsievent')->get();
        return view('user-page.blog.event', ['sampul_event' => $sampul_event],['deskripsi' => $deskripsi,'logo' => $logo,'sosial' => $sosial,'projects' => $projects,'eventheaders'=>$eventheaders]);
    }

    public function kelolaindexAction()
    {

        $eventwisata = DB::table('event_wisatas')
            ->select('event_wisatas.*', 'sampul_event.nama_sampul')
            ->join('sampul_event', 'sampul_event.id', '=', 'event_wisatas.id_sampul_event')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.kelolaevent', compact('eventwisata','logo'));
    }
    public function editat($id)
    {
        $update = DeskripsiEventModel::find($id);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsievent', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_event' => 'required',
                    'deskripsi_event' => 'required'
                ]
            );
        $update = DeskripsiEventModel::find($id);
        $update->judul = $request->judul_event;
        $update->deskripsi = $request->deskripsi_event;
        $update->save();

        return redirect('/eventwisata');
        }

    public function indexAction2($id)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $sampul_event = SampulEvent::find($id);
        $event_wisata = DB::table('event_wisatas')
            ->where('id_sampul_event', '=', $id)
            ->get();
        return view('user-page.blog.detail1_event_wisata', ['event_wisata' => $event_wisata, 'sampul_event' => $sampul_event,'logo' => $logo,'sosial' => $sosial,'projects' => $projects]);
    }
    public function kelolaindexActionView($id_event)
    {
        $view = EventWisata::find($id_event);
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-event-wisata-view', compact('view','logo'));
    }

    public function indexAction3($id_event)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        EventWisata::find($id_event)->increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $event_wisata_detail = EventWisata::find($id_event);
        $like = LikeEvent::where('id_event',$event_wisata_detail->id_event)->count();
        return view('user-page.blog.detail2_event_wisata', ['event_wisata_detail' => $event_wisata_detail,'logo' => $logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }


    public function tambah()
    {
        $sampul = SampulEvent::all();
        $logo = DB::table('logo_webs')->get();

        return view('admin.tambah-event-wisata', compact('sampul','logo'));
    }
    public function store(Request $request)
    {   $this->validate(
        $request,
        [
            'judul_event' => 'required',
            'id_sampul_event' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200',
            'deskripsi_event' => 'required'


        ]
    );

        $objek = new EventWisata();
        $objek->judul_event = $request->judul_event;
        $objek->id_sampul_event = $request->id_sampul_event;
        $objek->deskripsi_event = $request->deskripsi_event;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolaevent');
    }

    public function edit($id_event)
    {
        $update = EventWisata::find($id_event);
        $kategori = DB::table('sampul_event')->get();
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-eventwisata', compact('kategori','update','logo'));
    }

    public function update(request $request, $id_event)
    {   $this->validate(
        $request,
        [
            'judul_event' => 'required',
            'nama_sampul' => 'required', 
            'file_foto' => 'max:5000' ,'dimensions:max_width=1200',          
            'deskripsi_event' => 'required'


        ]
    );
        $update = EventWisata::find($id_event);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $update->file_foto = $file;
        }
        $update->judul_event = $request->judul_event;
        $update->id_sampul_event = $request->nama_sampul;
        $update->file_foto = $file;
        $update->deskripsi_event = $request->deskripsi_event;
        $update->save();

        return redirect('kelolaevent');
    }

    public function hapus($id_event)
    {
        $hapus = EventWisata::find($id_event);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
    //sampul event
    public function kelolaindexActionSampul()
    {
        $sampul = SampulEvent::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.sampul-event', ['logo' => $logo,'sampul'=>$sampul]);
    }
    public function tambahsampul()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-sampul-event', compact('logo'));
    }

    public function storesampul(Request $request)
    {   $this->validate(
        $request,
        [

            'nama_sampul' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'



        ]
    );
        $sampul = new SampulEvent();
        $sampul->nama_sampul = $request->nama_sampul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $sampul->file_foto = $file;
        }

        $sampul->save();
        return redirect('sampul-event');
    }

    public function editsampul($id)
    {
        $update = SampulEvent::find($id);
        $logo = DB::table('logo_webs')->get();

        return view('admin.ubah-sampulevent', compact('update','logo'));
    }

    public function updatesampul(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'sampul_event' => 'required',
                'file_foto' =>'max:5000' ,'dimensions:max_width=1200'

            ]
        );
        $update = SampulEvent::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/eventwisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_sampul = $request->sampul_event;
        $update->file_foto = $file;
        $update->save();

        return redirect('sampul-event');
    }

        //header event wisata
        public function editev()
        {
            $update = EventHeaders::find(1);
            $logo = DB::table('logo_webs')->get();
            $eventheaders = DB::table('event_headers')->get();
            return view('admin.taglineevent', compact('update','logo','eventheaders'));
        }

        public function updateev(request $request,$id)

            {
                $this->validate(
                    $request,
                    [
                    
                        'tagline' => 'required',
                        'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                    ]
                );
                $update = EventHeaders::find($id);
                $file = $update->file_foto;
                if ($request->hasFile('file_foto')) {
                    $file = $request->file('file_foto')->getClientOriginalName();
                    $request->file('file_foto')->move('images/eventheaders', $file);
                    $update->file_foto = $file;
                }

            $update->tagline = $request->tagline;
            $update->file_foto = $file;
            $update->save();

            return redirect('/eventwisata');
            }


    public function hapusSampul($id)
    {
        $hapus = SampulEvent::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}