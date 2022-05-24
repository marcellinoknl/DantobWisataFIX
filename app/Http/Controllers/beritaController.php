<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Berita_Wisata;
use Illuminate\Http\Request;
use Auth;

class beritaController extends Controller
{
    public function indexAction()
    {
        $berita_wisata = DB::table('berita_wisata')
        ->select('berita_wisata.*','users.name')
        ->join('users', 'berita_wisata.id_user', '=', 'users.id')
        ->get(); 
        return view('user-page.blog.berita', ['berita_wisata' => $berita_wisata]);
    }

    public function kelolaindexAction()
    {
        $kelolaberita = Berita_Wisata::all();
        return view('admin.kelolaberita', compact('kelolaberita'));
    }
    public function kelolaindexActionView($id_berita)
    {
        $view = Berita_Wisata::find($id_berita);
        return view('admin.kelola-berita-wisata-view', compact('view'));
    }


    public function indexAction2($id_berita)
    {
        $berita_wisata_detail = Berita_Wisata::find($id_berita);
        return view('user-page.blog.detail_berita', ['berita_wisata_detail' => $berita_wisata_detail]);
    }

    public function tambah()
    {
        return view('admin.tambah-berita-wisata');
    }



    public function store(Request $request)
    {   
        $this->validate(
            $request,
            [
                'judul_berita' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200',
                'isi_berita' => 'required' 
                
                
                                          
                
            ]
        );
        $objek = new Berita_Wisata();
        $objek->judul_berita = $request->judul_berita;
        $objek->isi_berita = $request->isi_berita;
        $objek->id_user = Auth::user()->id;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/berita', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolaberita');
    }

    public function edit($id_berita)
    {
        $update =  Berita_Wisata::find($id_berita);
        return view('admin.ubah-beritawisata', compact('update'));
    }

    public function update(request $request, $id_berita)
    {
        $this->validate(
            $request,
            [
                'judul_berita' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
                'isi_berita' => 'required'
              
            ]
        );
        $update =  Berita_Wisata::find($id_berita);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/berita', $file);
            $update->file_foto = $file;
        }
        $update->judul_berita = $request->judul_berita;
        $update->file_foto = $file;
        $update->isi_berita = $request->isi_berita;
        $update->save();

        return redirect('kelolaberita');
    }

    public function hapus($id_berita)
    {
        $hapus = Berita_Wisata::find($id_berita);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
