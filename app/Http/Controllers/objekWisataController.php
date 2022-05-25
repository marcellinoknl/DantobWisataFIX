<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\Kategori_Wisata;
use App\Models\Kabupaten;

use Illuminate\Http\Request;

class objekWisataController extends Controller
{
    public function indexAction()
    {
        $objwisatakabupaten = DB::table('objwisatakabupaten')->get();

        return view('user-page.objek-wisata', compact('objwisatakabupaten'));
    }

    public function kelolaindexAction()
    {

        $objekwisata = DB::table('objek_wisata')
            ->select('objek_wisata.*', 'objwisatakabupaten.nama_kab', 'kategori_wisata.nama_kategori')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'objek_wisata.id_obj_wisata_kabupaten')
            ->join('kategori_wisata', 'kategori_wisata.id_kategori', '=', 'objek_wisata.id_kat_wisata')
            ->get();
        return view('admin.kelolaobjekwisata', compact('objekwisata'));
    }

    public function kelolaindexActionView($id_obj_wisata)
    {
        $view = Objek_Wisata::find($id_obj_wisata);
        return view('admin.kelola-objek-wisata-view', compact('view'));
    }

    public function indexAction2(Request $request,$id_obj_wisata_kabupaten)
    {
        $keyword = $request->keyword;
        $objwisatakabupaten = Kabupaten::find($id_obj_wisata_kabupaten);
        $objek_wisata = DB::table('objek_wisata')
        ->select('objek_wisata.*', 'kategori_wisata.nama_kategori')
        ->join('kategori_wisata', 'objek_wisata.id_kat_wisata', '=', 'kategori_wisata.id_kategori')
            ->where('id_obj_wisata_kabupaten', '=', $id_obj_wisata_kabupaten)
            ->where('nama_wisata','LIKE','%'.$keyword.'%')
            ->paginate(12);
        $kategori = Kategori_Wisata::all();
        $objwisatakabupatenfilter = DB::table('objwisatakabupaten')->get();
        return view('user-page.detail1_objek_wisata', ['objek_wisata' => $objek_wisata, 'objwisatakabupaten' => $objwisatakabupaten,'kategori'=>$kategori,'objwisatakabupatenfilter'=>$objwisatakabupatenfilter,'keyword'=>$keyword]);
    }

    public function indexAction3($id_obj_wisata)
    {

        $objek_wisata_detail = Objek_Wisata::find($id_obj_wisata);
        return view('user-page.detail2_objek_wisata', ['objek_wisata_detail' => $objek_wisata_detail]);
    }

    public function tambah()
    {
        $kabupaten = Kabupaten::all();
        $kategori = Kategori_Wisata::all();
        return view('admin.tambah-objek-wisata', compact('kabupaten', 'kategori'));
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
        $update = Objek_Wisata::find($id_obj_wisata);
        $kabupaten = DB::table('objwisatakabupaten')->get();
        $kategori = DB::table('kategori_wisata')->get();
        return view('admin.ubah-objekwisata', compact('update', 'kabupaten', 'kategori'));
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
