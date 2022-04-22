<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function kelolaindexAction()
    {

        $kabupaten = Kabupaten::all();
        return view('admin.kelola-kab', compact('kabupaten'));
    }

    public function tambah()
    {
        return view('admin.tambah-kabupaten-wisata');
    }

    public function store(Request $request)
    {
        $kabupaten = new Kabupaten();
        $kabupaten->nama_kab = $request->nama_kab;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $kabupaten->file_foto = $file;
        }

        $kabupaten->save();
        return redirect('kelolakab');
    }

    public function edit($id_obj_wisata_kabupaten)
    {
        $update = Kabupaten::find($id_obj_wisata_kabupaten);
        return view('admin.ubah-kabupaten-wisata', compact('update'));
    }

    public function update(request $request, $id_obj_wisata_kabupaten)
    {
        $update = Kabupaten::find($id_obj_wisata_kabupaten);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_kab = $request->nama_kab;
        $update->file_foto = $file;
        // $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('kelolakab');
    }

    public function hapus($id_obj_wisata_kabupaten)
    {
        $hapus = Kabupaten::find($id_obj_wisata_kabupaten);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
