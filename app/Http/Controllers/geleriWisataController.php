<?php

namespace App\Http\Controllers;
use App\Models\counter;
use App\Models\GaleriWisata;
use App\Models\DeskripsiGaleri;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\GaleriHead;

class geleriWisataController extends Controller
{
    public function indexAction()
    {
        $logo = DB::table('logo_webs')->get();
        $galeriheaders = DB::table('galeri_heads')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $galeriwisata = DB::table('galeri_wisata')->get(); 
        $deskripsi = DB::table('deskripsi_galeris')->get();
        return view('user-page.galeri-wisata', ['galeriwisata' => $galeriwisata],['deskripsi' => $deskripsi,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'galeriheaders'=>$galeriheaders]);
        
    }
    public function kelolaindexAction()
    {

        $galeriwisata = GaleriWisata::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelolagaleri', compact('galeriwisata','logo'));
    }
    public function tambah()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-galeri-wisata', ['logo' => $logo]);
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
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-galeriwisata', compact('update','logo'));
    }
    public function editat($id)
    {
        $update = DeskripsiGaleri::find($id);
         $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsigaleri', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
    {
        $this->validate(
            $request,
            [
               
                'judul_fasilitas' => 'required',
                'deskripsi_fasilitas' => 'required'
            ]
        );
    $update = DeskripsiGaleri::find($id);
    $update->judul = $request->judul_fasilitas;
    $update->deskripsi = $request->deskripsi_fasilitas;
    $update->save();

        return redirect('/galeriwisata');
        }
          //header galeri wisata
          public function editgal()
          {
              $update = GaleriHead::find(1);
              $logo = DB::table('logo_webs')->get();
              $galeriheaders = DB::table('galeri_heads')->get();
              return view('admin.taglinegaleri', compact('update','logo','galeriheaders'));
          }
      
          public function updategal(request $request,$id)
          
              {
                  $this->validate(
                      $request,
                      [
                         
                          'tagline' => 'required',
                          'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                      ]
                  );
                  $update = GaleriHead::find($id);
                  $file = $update->file_foto;
                  if ($request->hasFile('file_foto')) {
                      $file = $request->file('file_foto')->getClientOriginalName();
                      $request->file('file_foto')->move('images/galeriheaders', $file);
                      $update->file_foto = $file;
                  }
      
              $update->tagline = $request->tagline;
              $update->file_foto = $file;
              $update->save();
      
              return redirect('/galeriwisata');
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