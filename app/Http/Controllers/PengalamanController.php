<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function indexAction()
    {
        $pengalaman = DB::table('pengalaman_wisata')->get();
        return view('user-page.pengalaman', ['pengalaman' => $pengalaman]);
    }
    public function indexActiontambahpengalaman()
    {
        $pengalamanplus = DB::table('pengalaman_wisata')->get();
        return view('user-page.tambah-pengalaman', ['pengalamanplus' => $pengalamanplus]);
    }

    public function kelolaindexAction()
    {


        $pengalaman = DB::table('pengalaman_wisata')
            ->select('pengalaman_wisata.*', 'users.name')
            ->join('users', 'users.id', '=', 'pengalaman_wisata.id_user')
            ->get();
        return view('admin.kelola-pengalaman-wisata', compact('pengalaman'));
    }

    public function kelolaindexAction2()
    {
        $persetujuan = DB::table('pengalaman_wisata')
            ->select('pengalaman_wisata.*', 'users.name')
            ->join('users', 'users.id', '=', 'pengalaman_wisata.id_user')
            ->get();
        return view('admin.persetujuan-pengalaman-wisata', compact('persetujuan'));
    }

    // public function indexAction2($id_obj_wisata_kabupaten)
    // {
    //     $objwisatakabupaten = Kabupaten::find($id_obj_wisata_kabupaten);
    //     $objek_wisata = DB::table('objek_wisata')
    //         ->where('id_obj_wisata_kabupaten', '=', $id_obj_wisata_kabupaten)
    //         ->get();
    //     return view('user-page.detail1_objek_wisata', ['objek_wisata' => $objek_wisata, 'objwisatakabupaten' => $objwisatakabupaten]);
    // }

    // public function indexAction3($id_obj_wisata)
    // {

    //     $objek_wisata_detail = Objek_Wisata::find($id_obj_wisata);
    //     return view('user-page.detail2_objek_wisata', ['objek_wisata_detail' => $objek_wisata_detail]);
    // }

    // public function tambah()
    // {
    //     $kabupaten = Kabupaten::all();
    //     $kategori = Kategori_Wisata::all();
    //     return view('admin.tambah-objek-wisata', compact('kabupaten', 'kategori'));
    // }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_wisata' => 'required',
                'deskripsi' => 'required',
                'nama_kategori' => 'required',
                'nama_kabupaten' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
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
