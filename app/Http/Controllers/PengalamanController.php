<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\PengalamanWisata;
use Illuminate\Http\Request;
use Auth;

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
//pengalaman saya

    public function indexActionpengalamansaya()
    {
        $pengalamansaya = DB::table('pengalaman_wisata')
        ->where('id_user', '=',Auth::user()->id)
        ->get();
        return view('user-page.pengalaman-wisata-saya', ['pengalamansaya' => $pengalamansaya]);
    }


    public function editPengalamanSaya($id_pengalaman){
        $updates = PengalamanWisata::find($id_pengalaman);
        return view('user-page/edit-pengalaman-wisata-saya', compact('updates'));
    }

    public function updatePengalamanSaya(request $request, $id_pengalaman)
    {
        // $this->validate(
        //     $request,
        //     [
        //         'judul' => 'required',
        //         'deskripsi' => 'required',
        //         'nama_kategori' => 'required',
        //         'deskripsi' => 'required',
        //         'nama_kabupaten' => 'required'
               
        //     ]
        // );
        $update = PengalamanWisata::find($id_pengalaman);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('/pengalamanwisata-saya');
    }

//---------------------------------------//
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
            ->join ('users', 'users.id', '=', 'pengalaman_wisata.id_user')
            ->where ('pengalaman_wisata.status','=','pending')
            ->get();
        return view('admin.persetujuan-pengalaman-wisata', compact('persetujuan'));
    }



    public function tambah()
    {
        $pengalaman = PengalamanWisata::all();
        // $kategori = Kategori_Wisata::all();
        return view('admin.tambah-pengalaman-wisata', compact('pengalaman'));
    }



    public function store(Request $request)
    {
        // $this->validate(
        //     $request,
        //     [
        //         'nama_wisata' => 'required',
        //         'deskripsi' => 'required',
        //         'nama_kategori' => 'required',
        //         'nama_kabupaten' => 'required',
        //         'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
        //     ]
        // );
        $pengalaman = new PengalamanWisata();
        $pengalaman->judul = $request->judul;
        $pengalaman->deskripsi = $request->deskripsi;
        $pengalaman->id_user = Auth::user()->id;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/pengalaman', $file);
            $pengalaman->file_foto = $file;
        }

        $pengalaman->save();
        return redirect('kelolapengalamanwisata');
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

    public function TambahPengalaman(Request $request){
            $TambahPengalaman = new PengalamanWisata();
            $TambahPengalaman->id_user = Auth::user()->id;
            $TambahPengalaman->judul = $request->judul;
            $TambahPengalaman->deskripsi = $request->deskripsi;
            if ($request->hasFile('file_foto')){
                $file= $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/Pengalaman',$file);
                $TambahPengalaman->file_foto = $file;
            }
            $TambahPengalaman->save();
            return redirect('/pengalamanwisata-saya');
    }
}
