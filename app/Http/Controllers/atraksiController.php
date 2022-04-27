<?php

namespace App\Http\Controllers;
use App\Models\Atraksi_Wisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction() {
        $atraksi_wisata = DB::table('atraksi_wisata')->get();
        return view('user-page.blog.atraksi',['atraksi_wisata'=>$atraksi_wisata]);
    }
    public function kelolaindexAction() {
        
        $atraksi = Atraksi_Wisata::all();
        return view('admin.kelolaatraksi',compact('atraksi'));
    }

    public function tambah(){
        return view('admin.tambah-atraksi-wisata');
    }



    public function store(Request $request){
        $objek = new Atraksi_Wisata();
        $objek->judul = $request->judul;
        $objek->deskripsi = $request->deskripsi;
        if ($request->hasFile('file_foto')){
            $file= $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/Atraksi',$file);
            $objek->file_foto = $file;
        } 
  
        $objek -> save();
        return redirect('kelolaatraksi');
        
    }

    public function edit($atraksi_id){
        $update = Atraksi_Wisata::find($atraksi_id);
        return view('admin.ubah-atraksiwisata',compact('update'));
    }

    public function update(request $request, $atraksi_id){
        $update = Atraksi_Wisata::find($atraksi_id);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')){
                $file= $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/Atraksi',$file);
                $update->file_foto = $file;
            }   
            $update->judul= $request->judul;
            $update->file_foto = $file;
            $update->deskripsi = $request->deskripsi;
            $update -> save();
           
            return redirect('kelolaatraksi');         
    
        }
 
                public function hapus($atraksi_id){
                    $hapus = atraksi_Wisata::find($atraksi_id);
                     if($hapus->delete()){}
                       return redirect()->back();
                }
            
            }