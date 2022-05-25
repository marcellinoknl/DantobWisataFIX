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
        $this->validate(
            $request,
            [
               
                'nama_kab' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                
            ]
        );
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
            $this->validate(
                $request,
                [
                   
                    'nama_kab' => 'required',
                    'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                ]
            );
        $update = Kabupaten::find($id_obj_wisata_kabupaten);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_kab = $request->nama_kab;
        $update->file_foto = $file;
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

    function categoryobjekwisata(){

        $sub_categories = DB::table('objek_wisata')->first();
        $main_category = DB::table('kategori_wisata')->get();
        return view('user-page.detail1_objek_wisata', ['sub_categories' => $sub_categories, 'main_category' => $main_category]);
    }

    function get_causes_againts_categoryobjekwisata($id_kategori){
        $data = DB::table('objek_wisata as obj')->selectRaw('(Select file_foto from kategori_wisata where id_kategori = obj.id_kat_wisata) 
        as file_foto,(Select nama_wisata from kategori_wisata where id_kategori = obj.id_kat_wisata) as nama_wisata')
        ->whereRaw('id_kategori IN ('.$id_kategori.')')->get();

        echo json_encode($data);
    }
}