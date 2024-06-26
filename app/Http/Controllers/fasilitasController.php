<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\counter;
use App\Models\Fasilitas;
use App\Models\SampulFasilitas;
use App\Models\Kabupaten;
use App\Models\DeskripsiFasiltas;
use App\Models\LikeFasilitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FasilModel;

class fasilitasController extends Controller
{
    public function indexAction()
    {
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $fasils = DB::table('fasil_models')->get();
        $projects = counter::latest()->paginate(5);
        $sosial = DB::table('sosial_media')->get();
        $sampul_fasilitas = DB::table('sampul_fasilitas')->orderBy('nama_sampul', 'ASC')->get();
        $deskripsi = DB::table('deskripsi_fasiltas')->get(); 
        return view('user-page.fasilitas', ['sampul_fasilitas' => $sampul_fasilitas],['deskripsi' => $deskripsi,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'fasils'=>$fasils]);
    }

    public function indexAction2(Request $request,$id)
    {
 
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $keyword = $request->keyword;
        $sampul_fasilitas = SampulFasilitas::find($id);
        $fasilitias_wisata = DB::table('fasilitas_wisata')
        ->select('fasilitas_wisata.*','users.name','objwisatakabupaten.nama_kab')
        ->join('users', 'fasilitas_wisata.id_user', '=', 'users.id')
        ->join('objwisatakabupaten', 'fasilitas_wisata.id_obj_wisata_kabupaten', '=', 'objwisatakabupaten.id_obj_wisata_kabupaten')
            ->where('id_sampul_fasilitas', '=', $id)
            ->where('nama_fasilitas','LIKE','%'.$keyword.'%')
            ->orderBy('id_fasilitas')
            ->paginate(6);
        $kabupaten = Kabupaten::all();
        return view('user-page.detail1_fasilitas_wisata', ['fasilitias_wisata' => $fasilitias_wisata, 'sampul_fasilitas' => $sampul_fasilitas,'kabupaten'=>$kabupaten, 'keyword'=>$keyword, 'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }

    public function indexAction3($id_fasilitas)
    {
        Fasilitas::find($id_fasilitas)->increment('views');
        $logo = DB::table('logo_webs')->get();
        counter::increment('views');
        $projects = counter::latest()->paginate(5);
        $sosial = DB::table('sosial_media')->get();
        $fasilitas_wisata_detail = Fasilitas::find($id_fasilitas);
        $fasilitias_wisata_detail_user = DB::table('fasilitas_wisata')
        ->select('users.name','users.id')
        ->join('users', 'fasilitas_wisata.id_user', '=', 'users.id')
        ->where('fasilitas_wisata.id_fasilitas','=',$id_fasilitas)
        ->get();
        $like = LikeFasilitas::where('id_fasilitas',$fasilitas_wisata_detail->id_fasilitas)->count();

        return view('user-page.detail2_fasilitas_wisata', ['fasilitas_wisata_detail' => $fasilitas_wisata_detail,'fasilitias_wisata_detail_user'=>$fasilitias_wisata_detail_user,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }
    public function kelolaindexActionView($id_fasilitas)
    {
        $view = Fasilitas::find($id_fasilitas);
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-fasilitas-wisata-view', compact('view','logo'));
    }

    public function kelolaindexActionSampul()
    {
        $sampulfasilitas = SampulFasilitas::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-sampul-fasilitas', compact('sampulfasilitas','logo'));
    }
     //header FASIL
     public function editfas()
     {
         $update = FasilModel::find(1);
         $logo = DB::table('logo_webs')->get();
         $fasils = DB::table('fasil_models')->get();
         return view('admin.taglinefasilitas', compact('update','logo','fasils'));
     }
 
     public function updatfas(request $request,$id)
     
         {
             $this->validate(
                 $request,
                 [
                    
                     'caption' => 'required',
                     'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                 ]
             );
             $update = FasilModel::find($id);
             $file = $update->file_foto;
             if ($request->hasFile('file_foto')) {
                 $file = $request->file('file_foto')->getClientOriginalName();
                 $request->file('file_foto')->move('images/fasil', $file);
                 $update->file_foto = $file;
             }
 
         $update->tagline = $request->caption;
         $update->file_foto = $file;
         $update->save();
 
         return redirect('/fasilitaswisata');
         }
    public function kelolaindexActionDaftarFasilitas()
    {
        $fasilitas = DB::table('fasilitas_wisata')
            ->select('fasilitas_wisata.*', 'sampul_fasilitas.nama_sampul','objwisatakabupaten.nama_kab')
            ->join('sampul_fasilitas', 'sampul_fasilitas.id', '=', 'fasilitas_wisata.id_sampul_fasilitas')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'fasilitas_wisata.id_obj_wisata_kabupaten')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-fasilitas', compact('fasilitas','logo'));
    }

    public function tambahsampul()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-sampul-fasilitas', ['logo' => $logo]);
    }
    public function store(Request $request)
    {   $this->validate(
        $request,
        [
            
            'nama_sampul' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            
                                      
            
        ]
    );
        $objek = new SampulFasilitas();
        $objek->nama_sampul = $request->nama_sampul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('sampul-fasilitas');
    }

    public function tambahfasilitas()
    {
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get();
        $kabupaten = DB::table('objwisatakabupaten')->get();
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-fasilitas-wisata', compact('sampul_fasilitas','kabupaten','logo'));
    }

    public function storefasilitas(Request $request)
    {    $this->validate(
        $request,
        [
            
            'nama_fasilitas'=>'required',
            'lokasi'=>'required',
            'id_sampul_fasilitas' => 'required', 
            'id_obj_wisata_kabupaten' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200',
            'deskripsi' => 'required'
                                      
            
        ]
    );

        $fasilitas = new Fasilitas();

        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->lokasi = $request->lokasi;
        $fasilitas->deskripsi = $request->deskripsi;

        $fasilitas->lokasi = $request->lokasi;
        $fasilitas->id_user = Auth::user()->id;
        $fasilitas->id_sampul_fasilitas = $request->id_sampul_fasilitas;
        $fasilitas->id_obj_wisata_kabupaten = $request->id_obj_wisata_kabupaten;
         if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $fasilitas->file_foto = $file;
        }

        $fasilitas->save();
        return redirect('daftar-fasilitas');
    }

    public function editfasilitas($id_fasilitas)
    {
        $update = Fasilitas::find($id_fasilitas);
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get();
        $kabupaten = DB::table('objwisatakabupaten')->get();
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-fasilitaswisata', compact('update', 'sampul_fasilitas','kabupaten','logo'));
    }
    public function editsampul($id)
    {
        $update = SampulFasilitas::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-sampulfasilitas-wisata', compact('update','logo'));
    }

    public function updatesampul(request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nama_sampul' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $update = SampulFasilitas::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $update->file_foto = $file;
        }
        $update->nama_sampul = $request->nama_sampul;
        $update->file_foto = $file;
        $update->save();

        return redirect('sampul-fasilitas');
    }

    public function update(request $request, $id_fasilitas)
    {
        $this->validate(
            $request,
            [
                'nama_fasilitas' => 'required',
                'lokasi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
                'nama_sampul' => 'required',
                'nama_kab' => 'required',
                'deskripsi' => 'required'
            ]
        );
        $update = Fasilitas::find($id_fasilitas);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $update->file_foto = $file;
        }
        $update->nama_fasilitas = $request->nama_fasilitas;
        $update->file_foto = $file;
        $update->lokasi = $request->lokasi;
        $update->id_sampul_fasilitas = $request->nama_sampul;
        $update->id_obj_wisata_kabupaten = $request->nama_kab;
        $update->deskripsi = $request->deskripsi;

        $update->save();

        return redirect('daftar-fasilitas');
    }
    public function editat($id)
    {
        $update = DeskripsiFasiltas::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-deskripsifasilitas', compact('update','logo'));
    }
    public function updateat(request $request, $id)
    
    {
        $this->validate(
            $request,
            [
               
                'judul_fasilitas' => 'required',
                'deskripsi_fasilitas' => 'required'
            ]
        );
    $update = DeskripsiFasiltas::find($id);
    $update->judul = $request->judul_fasilitas;
    $update->deskripsi = $request->deskripsi_fasilitas;
    $update->save();

    return redirect('/fasilitaswisata');
    }


    public function hapus($id_fasilitas)
    {
        $hapus = Fasilitas::find($id_fasilitas);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

    public function hapusSampul($id)
    {
        $hapus = SampulFasilitas::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}