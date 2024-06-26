<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\Kategori_Wisata;
use App\Models\Kabupaten;
use App\Models\DeskripsiDestinasi;
use App\Models\counter;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\DestinasiModel;

class objekWisataController extends Controller
{
    public function indexAction()
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $destinasis = DB::table('destinasi_models')->get();
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $objwisatakabupaten = DB::table('objwisatakabupaten')->get();
        $deskripsi = DB::table('deskripsi_destinasis')->get();
       
       
        return view('user-page.objek-wisata', compact('objwisatakabupaten','deskripsi','logo','sosial','projects','destinasis'));
    }

    public function kelolaindexAction()
    {

        $objekwisata = DB::table('objek_wisata')
            ->select('objek_wisata.*', 'objwisatakabupaten.nama_kab', 'kategori_wisata.nama_kategori')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'objek_wisata.id_obj_wisata_kabupaten')
            ->join('kategori_wisata', 'kategori_wisata.id_kategori', '=', 'objek_wisata.id_kat_wisata')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.kelolaobjekwisata', compact('objekwisata','logo'));
    }

    public function kelolaindexActionView($id_obj_wisata)
    {
        $view = Objek_Wisata::find($id_obj_wisata);
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-objek-wisata-view', compact('view','logo'));
    }

    public function indexAction2(Request $request,$id_obj_wisata_kabupaten)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $keyword = $request->keyword;
        $objwisatakabupaten = Kabupaten::find($id_obj_wisata_kabupaten);
        $objek_wisata = DB::table('objek_wisata')
        ->select('objek_wisata.*', 'kategori_wisata.nama_kategori')
        ->join('kategori_wisata', 'objek_wisata.id_kat_wisata', '=', 'kategori_wisata.id_kategori')
            ->where('id_obj_wisata_kabupaten', '=', $id_obj_wisata_kabupaten)
            ->where('nama_wisata','LIKE','%'.$keyword.'%')
            ->get();
        
        $kategori = Kategori_Wisata::all();
        $objwisatakabupatenfilter = DB::table('objwisatakabupaten')->get();
        return view('user-page.detail1_objek_wisata', ['objek_wisata' => $objek_wisata, 'objwisatakabupaten' => $objwisatakabupaten,'kategori'=>$kategori,'objwisatakabupatenfilter'=>$objwisatakabupatenfilter,'keyword'=>$keyword,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }
    public function editat($id)
    {
        $update = DeskripsiDestinasi::find($id);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsidestinasi', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_atraksi' => 'required',
                    'deskripsi_atraksi' => 'required'
                ]
            );
        $update = DeskripsiDestinasi::find($id);
        
        $update->judul = $request->judul_atraksi;
        $update->deskripsi = $request->deskripsi_atraksi;
        $update->save();

        return redirect('/objek-wisata');
        }

    public function indexAction3($id_obj_wisata)
    {
        //counting views page
        Objek_Wisata::find($id_obj_wisata)->increment('views');
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $objek_wisata_detail = Objek_Wisata::find($id_obj_wisata);
        $like = Like::where('id_obj_wisata',$objek_wisata_detail->id_obj_wisata)->count();
        return view('user-page.detail2_objek_wisata', ['objek_wisata_detail' => $objek_wisata_detail,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }

    public function tambah()
    {
        $kabupaten = Kabupaten::all();
        $logo = DB::table('logo_webs')->get();
        $kategori = Kategori_Wisata::all();
        return view('admin.tambah-objek-wisata', compact('kabupaten', 'kategori','logo'));
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_wisata' => 'required',
                'deskripsi' => 'required',
                'nama_kategori' => 'required',
                'nama_kabupaten' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $objek = new Objek_Wisata();
        $objek->nama_wisata = $request->nama_wisata;
        $objek->deskripsi = $request->deskripsi;
        $objek->id_obj_wisata_kabupaten = $request->nama_kabupaten;
        $objek->id_kat_wisata = $request->nama_kategori;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolaobjek');
    }

    public function edit($id_obj_wisata)
    {
        $logo = DB::table('logo_webs')->get();
        $update = Objek_Wisata::find($id_obj_wisata);
        $kabupaten = DB::table('objwisatakabupaten')->get();
        $kategori = DB::table('kategori_wisata')->get();
        return view('admin.ubah-objekwisata', compact('update', 'kabupaten', 'kategori','logo'));
    }
    //header destinasi
    public function editdes()
    {
        $update = DestinasiModel::find(1);
        $logo = DB::table('logo_webs')->get();
        $destinasis = DB::table('destinasi_models')->get();
        return view('admin.taglinedestinasi', compact('update','logo','destinasis'));
    }

    public function updatdes(request $request,$id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'tagline' => 'required',
                    'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                ]
            );
            $update = DestinasiModel::find($id);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/destinasi', $file);
                $update->file_foto = $file;
            }

        $update->tagline = $request->tagline;
        $update->file_foto = $file;
        $update->save();

        return redirect('/objek-wisata');
        }

    public function update(request $request, $id_obj_wisata)
    {
        $this->validate(
            $request,
            [
                'nama_wisata' => 'required',
                'deskripsi' => 'required',
                'nama_kategori' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
                'nama_kabupaten' => 'required'
               
            ]
        );
        $update = Objek_Wisata::find($id_obj_wisata);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_wisata = $request->nama_wisata;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->id_kat_wisata = $request->nama_kategori;
        $update->id_obj_wisata_kabupaten = $request->nama_kabupaten;
        $update->save();

        return redirect('/kelolaobjek');
    }

    public function hapus($id_obj_wisata)
    {
        $hapus = Objek_Wisata::find($id_obj_wisata);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
