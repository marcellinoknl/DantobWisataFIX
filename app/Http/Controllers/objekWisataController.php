<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\Kategori_Wisata;
use App\Models\Kabupaten;

use Illuminate\Http\Request;

class objekWisataController extends Controller
{
    public function indexAction() {
        return view('user-page.objek-wisata');
    }

    public function kelolaindexAction() {
        
        
        $objekwisata = DB::table('objek_wisata')
        ->select('objek_wisata.*','objwisatakabupaten.nama_kab','kategori_wisata.nama_kategori')
        ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten','=','objek_wisata.id_obj_wisata_kabupaten')
        ->join('kategori_wisata', 'kategori_wisata.id_kategori','=','objek_wisata.id_kat_wisata')
        ->get();
        return view('admin.kelolaobjekwisata',compact('objekwisata'));

    }

    public function tambah(){
        $kabupaten = Kabupaten::all();
        $kategori = Kategori_Wisata::all();
        return view('admin.tambah-objek-wisata',compact('kabupaten','kategori'));
    }



    public function store(Request $request){
        $objek = new Objek_Wisata();
        $objek->nama_wisata = $request->nama_wisata;
        $objek->deskripsi = $request->deskripsi;
        $objek->id_obj_wisata_kabupaten = $request->id_obj_wisata_kabupaten;
        $objek->id_kat_wisata = $request->id_kat_wisata;
        if ($request->hasFile('file_foto')){
            $file= $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata',$file);
            $objek->file_foto = $file;
        } 
  
        $objek -> save();
        return redirect('kelolaobjek');
        
    }

    public function edit($id_obj_wisata){
        $update = Objek_Wisata::find($id_obj_wisata);
        return view('admin.ubah-objekwisata',compact('update'));
    }

    public function update(request $request, $id_obj_wisata){
        $update = Objek_Wisata::find($id_obj_wisata);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')){
                $file= $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/objekwisata',$file);
                $update->file_foto = $file;
            }   
            $update->nama_wisata= $request->nama_wisata;
            $update->file_foto = $file;
            $update->deskripsi = $request->deskripsi;
            $update->id_kat_wisata = $request->id_kat_wisata;
            $update -> save();
           
            return redirect('kelolaobjek');         
    
        }

        public function hapus($id_obj_wisata){
            $hapus = Objek_Wisata::find($id_obj_wisata);
             if($hapus->delete()){}
               return redirect()->back();
        }
    


}
