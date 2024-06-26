<?php

namespace App\Http\Controllers;
use App\Models\counter;
use Illuminate\Support\Facades\DB;
use App\Models\Berita_Wisata;
use App\Models\DeskripsiBeritaModel;
use App\Models\LikeBerita;
use App\Models\BeritaHeader;
use Illuminate\Http\Request;
use Auth;

class beritaController extends Controller
{
    public function indexAction(Request $request)
    {    
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $berita = DB::table('berita_headers')->get();
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $deskripsi = DB::table('deskripsiberita')->get();
        $keyword = $request->keyword;
        $berita_wisata = DB::table('berita_wisata')
        ->select('berita_wisata.*','users.name')
        ->join('users', 'berita_wisata.id_user', '=', 'users.id')
        ->where('judul_berita','LIKE','%'.$keyword.'%')
        ->orwhere('isi_berita','LIKE','%'.$keyword.'%')
        ->paginate(6);
        $berita_wisata->appends($request->all());
        return view('user-page.blog.berita', ['berita_wisata' => $berita_wisata,'deskripsi' =>$deskripsi,'keyword'=>$keyword,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'berita'=>$berita]);
    }

    public function kelolaindexAction()
    {
        $kelolaberita = Berita_Wisata::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelolaberita', compact('kelolaberita','logo'));
    }
    public function kelolaindexActionView($id_berita)
    {
        $view = Berita_Wisata::find($id_berita);
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-berita-wisata-view', compact('view','logo'));
    }
    public function editat($id)
    {
        $update = DeskripsiBeritaModel::find($id);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsiberita', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_berita' => 'required',
                    'deskripsi_berita' => 'required'
                ]
            );
        $update = DeskripsiBeritaModel::find($id);
        $update->judul = $request->judul_berita;
        $update->deskripsi = $request->deskripsi_berita;
        $update->save();

        return redirect('/beritawisata');
        }

    public function indexAction2($id_berita)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $berita_wisata_detail = Berita_Wisata::find($id_berita);
        Berita_Wisata::find($id_berita)->increment('views');
        $like = LikeBerita::where('id_berita',$berita_wisata_detail->id_berita)->count();
        return view('user-page.blog.detail_berita', ['berita_wisata_detail' => $berita_wisata_detail,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }

    public function tambah()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-berita-wisata', ['logo' => $logo]);
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
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-beritawisata', compact('update','logo'));
    }
       //header berita wisata
   public function editber()
   {
       $update = BeritaHeader::find(1);
       $logo = DB::table('logo_webs')->get();
       $berita = DB::table('berita_headers')->get();
       return view('admin.taglineberita', compact('update','logo','berita'));
   }

   public function updateber(request $request,$id)
   
       {
           $this->validate(
               $request,
               [
                  
                   'tagline' => 'required',
                   'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
               ]
           );
           $update = BeritaHeader::find($id);
           $file = $update->file_foto;
           if ($request->hasFile('file_foto')) {
               $file = $request->file('file_foto')->getClientOriginalName();
               $request->file('file_foto')->move('images/beritaheader', $file);
               $update->file_foto = $file;
           }

       $update->tagline = $request->tagline;
       $update->file_foto = $file;
       $update->save();

       return redirect('/beritawisata');
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
