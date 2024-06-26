<?php

namespace App\Http\Controllers;
use App\Models\Kabupaten;
use App\Models\counter;
use App\Models\DewiDeskripsi;
use App\Models\DesaWisata;
use App\Models\LikeDesaWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DewiHeader;

class DesaWisataController extends Controller
{
    public function indexAction()
    {
        $projects = counter::latest()->paginate(5);
        $dewi = DB::table('dewi_headers')->get();
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $objwisatakabupaten = DB::table('objwisatakabupaten')->get();
        $deskripsi = DB::table('dewi_deskripsis')->get();

        return view('user-page.blog.desawisata.desawisata', compact('objwisatakabupaten','deskripsi','logo','sosial','projects','dewi'));
    }

    public function kelolaindexActionView($id)
    {
        $view = DesaWisata::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.desawisata.lihat-desawisata', compact('view','logo'));
    }
    public function editat($id)
    {
        $update = DewiDeskripsi::find($id);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsidewi', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_event' => 'required',
                    'deskripsi_event' => 'required'
                ]
            );
        $update = DewiDeskripsi::find($id);
        $update->judul = $request->judul_event;
        $update->deskripsi = $request->deskripsi_event;
        $update->save();

        return redirect('/desawisata');
        }


    public function kelolaindexAction()
    {

        $desawisatas = DB::table('desa_wisatas')
            ->select('desa_wisatas.*', 'objwisatakabupaten.nama_kab')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'desa_wisatas.id_obj_wisata_kabupaten')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.desawisata.keloladesawisata', compact('desawisatas','logo'));
    }


    //user
    public function indexAction2($id_obj_wisata_kabupaten)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $dewi = DB::table('dewi_headers')->get();
        $sosial = DB::table('sosial_media')->get();
        $objwisatakabupaten = Kabupaten::find($id_obj_wisata_kabupaten);
        $desawisatas = DB::table('desa_wisatas')
            ->where('id_obj_wisata_kabupaten', '=', $id_obj_wisata_kabupaten)
            ->get();
        
        $objwisatakabupatenfilter = DB::table('objwisatakabupaten')->get();
        return view('user-page.blog.desawisata.detail1_desa_wisata', ['desawisatas' => $desawisatas, 'objwisatakabupaten' => $objwisatakabupaten,'objwisatakabupatenfilter'=>$objwisatakabupatenfilter,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }

    public function indexAction3($id)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        DesaWisata::find($id)->increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $desawisatadetails = DesaWisata::find($id);
        $like = LikeDesaWisata::where('id_desawisata',$desawisatadetails->id)->count();
        return view('user-page.blog.desawisata.detail2_desa_wisata', ['desawisatadetails' => $desawisatadetails,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }
    
    public function tambah()
    {
        $kabupaten = Kabupaten::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.desawisata.tambah-desawisata', compact('kabupaten','logo'));
    }
   //header desa wisata
   public function editdew()
   {
       $update = DewiHeader::find(1);
       $logo = DB::table('logo_webs')->get();
       $dewi = DB::table('dewi_headers')->get();
       return view('admin.taglinedewi', compact('update','logo','dewi'));
   }

   public function updatedew(request $request,$id)
   
       {
           $this->validate(
               $request,
               [
                  
                   'tagline' => 'required',
                   'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
               ]
           );
           $update = DewiHeader::find($id);
           $file = $update->file_foto;
           if ($request->hasFile('file_foto')) {
               $file = $request->file('file_foto')->getClientOriginalName();
               $request->file('file_foto')->move('images/dewiheader', $file);
               $update->file_foto = $file;
           }

       $update->tagline = $request->tagline;
       $update->file_foto = $file;
       $update->save();

       return redirect('/desawisata');
       }


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_desa' => 'required',
                'deskripsi' => 'required',
                'nama_kabupaten' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $objek = new DesaWisata();
        $objek->nama_desa = $request->nama_desa;
        $objek->deskripsi = $request->deskripsi;
        $objek->id_obj_wisata_kabupaten = $request->nama_kabupaten;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/desawisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('keloladesawisata');
    }

    public function edit($id)
    {
        $update = DesaWisata::find($id);
        $kabupaten = DB::table('objwisatakabupaten')->get();
        $logo = DB::table('logo_webs')->get();
        return view('admin.desawisata.edit-desawisata', compact('update', 'kabupaten','logo'));
    }

    public function update(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_desa' => 'required',
                'deskripsi' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
                'nama_kabupaten' => 'required'
               
            ]
        );
        $update = DesaWisata::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/desawisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_desa = $request->nama_desa;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->id_obj_wisata_kabupaten = $request->nama_kabupaten;
        $update->save();

        return redirect('/keloladesawisata');
    }

    public function hapus($id)
    {
        $hapus = DesaWisata::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

}
