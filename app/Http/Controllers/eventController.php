<?php

namespace App\Http\Controllers;

use App\Models\EventWisata;
use App\Models\SampulEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function indexAction()
    {
        $sampul_event = DB::table('sampul_event')->get();
        return view('user-page.blog.event', ['sampul_event' => $sampul_event]);
    }

    public function kelolaindexAction()
    {

        $eventwisata = DB::table('event_wisatas')
            ->select('event_wisatas.*', 'sampul_event.nama_sampul')
            ->join('sampul_event', 'sampul_event.id', '=', 'event_wisatas.id_sampul_event')
            ->get();
        return view('admin.kelolaevent', compact('eventwisata'));
    }

    public function indexAction2($id)
    {
        $sampul_event = SampulEvent::find($id);
        $event_wisata = DB::table('event_wisatas')
            ->where('id_sampul_event', '=', $id)
            ->get();
        return view('user-page.blog.detail1_event_wisata', ['event_wisata' => $event_wisata, 'sampul_event' => $sampul_event]);
    }
    public function kelolaindexActionView($id_event)
    {
        $view = EventWisata::find($id_event);
        return view('admin.kelola-event-wisata-view', compact('view'));
    }

    public function indexAction3($id_event)
    {

        $event_wisata_detail = EventWisata::find($id_event);
        return view('user-page.blog.detail2_event_wisata', ['event_wisata_detail' => $event_wisata_detail]);
    }


    public function tambah()
    {
        $sampul = SampulEvent::all();

        return view('admin.tambah-event-wisata', compact('sampul'));
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
        return view('admin.ubah-eventwisata', compact('kategori','update'));
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
        return view('admin.sampul-event', compact('sampul'));
    }
    public function tambahsampul()
    {
        return view('admin.tambah-sampul-event');
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
        return view('admin.ubah-sampulevent', compact('update'));
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
    public function hapusSampul($id)
    {
        $hapus = SampulEvent::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}