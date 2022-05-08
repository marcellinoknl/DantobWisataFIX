<?php

namespace App\Http\Controllers;
use App\Models\Atraksi_Wisata;
use App\Models\SampulAtraksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.atraksi');
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

        //sampul atraksi
        public function kelolaindexActionSampul() {
            $sampulatraksi = SampulAtraksi::all();
            return view('admin.sampul-atraksi',compact('sampulatraksi'));
    
        }        
        public function tambahsampul()
        {
            return view('admin.tambah-sampul-atraksi');
        }
            
        public function storesampul(Request $request)
        {
            $sampul = new SampulAtraksi();
            $sampul->nama_sampul = $request->nama_sampul;
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/fasilitas', $file);
                $sampul->file_foto = $file;
            }
    
            $sampul->save();
            return redirect('sampul-atraksi');
        }

        public function editsampul($id)
        {
            $update = SampulAtraksi::find($id);
            return view('admin.ubah-sampulatraksi', compact('update'));
        }
    
        public function updatesampul(request $request, $id){
            $this->validate(
                $request,
                [
                    'nama_sampul' => 'required',
                    'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
                ]
            );
            $update = SampulAtraksi::find($id);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/Atraksi', $file);
                $update->file_foto = $file;
            }
            $update->nama_sampul = $request->nama_sampul;
            $update->file_foto = $file;
            $update->save();
    
            return redirect('sampul-fasilitas');
        }
        public function hapusSampul($id)
        {
            $hapus = sampulAtraksi::find($id);
            if ($hapus->delete()) {
            }
            return redirect()->back();
        }

 }