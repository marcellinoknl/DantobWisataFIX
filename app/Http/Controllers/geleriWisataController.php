<?php

namespace App\Http\Controllers;

use App\Models\GaleriWisata;

use Illuminate\Http\Request;

class geleriWisataController extends Controller
{
    public function indexAction()
    {
        return view('user-page.galeri-wisata');
    }
    public function kelolaindexAction()
    {

        $galeriwisata = GaleriWisata::all();
        return view('admin.kelolagaleri', compact('galeriwisata'));
    }
    public function tambah()
    {
        return view('admin.tambah-galeri-wisata');
    }



    public function store(Request $request)
    {   $this->validate(
        $request,
        [
            'judul' => 'required',
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
                                      
            
        ]
    );  
        $objek = new GaleriWisata();
        $objek->id_galeri = $request->id_galeri;
        $objek->judul = $request->judul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/galeriwisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolagaleri');
    }

    public function edit($galeri_id)
    {
        $update = GaleriWisata::find($galeri_id);
        return view('admin.ubah-galeriwisata', compact('update'));
    }

    public function update(request $request, $galeri_id)
    {   
        $this->validate(
            $request,
            [
                'judul' => 'required',
               
                                          
                
            ]
        );  
        $update = GaleriWisata::find($galeri_id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/galeriwisata', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update->file_foto = $file;
        // $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('kelolagaleri');
    }

    public function hapus($id_galeri)
    {
        $hapus = GaleriWisata::find($id_galeri);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}