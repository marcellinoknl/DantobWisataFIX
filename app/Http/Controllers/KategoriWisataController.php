<?php

namespace App\Http\Controllers;
use App\Models\Kategori_Wisata;
use App\Models\LogoWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori_Wisata::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-kategori-wisata', compact('kategori','logo'));
    }

    public function tambah()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-kelola-kategori-wisata', ['logo' => $logo]);
       
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $this->validate(
            $request,
            [
                'nama_kategori' => 'required'
                
            ]
        );
    
        $kategori = new Kategori_Wisata();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('kelolakat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        $update = Kategori_Wisata::find($id_kategori);
        $logo = DB::table('logo_webs')->get();
        
        return view('admin.ubah-kategoriwisata', compact('update','logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $this->validate(
            $request,
            [
              
                'nama_kategori' => 'required'
               
            ]
        );
    
        $update = Kategori_Wisata::find($id_kategori);
        
        $update->nama_kategori = $request->nama_kategori;
        
        $update->save();

        return redirect('kelolakat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori)
    {
        $hapus = Kategori_Wisata::find($id_kategori);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
