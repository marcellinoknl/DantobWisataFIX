<?php

namespace App\Http\Controllers;
use App\Models\PaketWisata;
use App\Models\counter;
use App\Models\DeskripsiPaket;
use App\Models\LikePaketWisata;
use App\Models\PaketwisataHeader;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function indexAction()
    {
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $paketheaders = DB::table('paketwisata_headers')->get();
        $paketbg = DB::table('paket_wisatas')->inRandomOrder()->get();
        $paket = DB::table('paket_wisatas')->get();
        $deskripsi = DB::table('deskripsi_pakets')->get();

        return view('user-page.paketwisata.paket-wisata', compact('paket','paketbg','deskripsi','logo','sosial','projects','paketheaders'));
    }

    public function kelolaindexActionView($id)
    {
        $view = PaketWisata::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.paketwisata.lihat-paketwisata', compact('view','logo'));
    }

    public function kelolaindexAction()
    {
        $paketwisatas = PaketWisata::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.paketwisata.kelolapaketwisata', compact('paketwisatas','logo'));
    }

    public function indexAction3($id)
    {
        PaketWisata::find($id)->increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $paketwisatadetails = PaketWisata::find($id);
        $like = LikePaketWisata::where('id_paket',$paketwisatadetails->id)->count();
        return view('user-page.paketwisata.detail_paket-wisata', ['paketwisatadetails' => $paketwisatadetails,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }

    public function tambah()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.paketwisata.tambah-paketwisata', compact('logo'));
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_paket' => 'required',
                'deskripsi' => 'required',
                'nohp' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $objek = new PaketWisata();
        $objek->nama_paket = $request->nama_paket;
        $objek->deskripsi = $request->deskripsi;
        $objek->nohp = $request->nohp;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/desawisata', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolapaketwisata');
    }

    public function edit($id)
    {
        $update = PaketWisata::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.paketwisata.edit-paketwisata', compact('update','logo'));
    }
    //Deskripsi Paket
    public function editat($id)
    {
        $update = DeskripsiPaket::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-deskripsipaket', compact('update','logo'));
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
    $update = DeskripsiPaket::find($id);
    $update->judul = $request->judul_fasilitas;
    $update->deskripsi = $request->deskripsi_fasilitas;
    $update->save();


        return redirect('/paketwisata');
        }
    public function update(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_paket' => 'required',
                'deskripsi' => 'required',
                'nohp' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
               
            ]
        );
        $update = PaketWisata::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/paketwisata', $file);
            $update->file_foto = $file;
        }
        $update->nama_paket = $request->nama_paket;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->nohp = $request->nohp;
        $update->save();

        return redirect('/kelolapaketwisata');
    }

        //header destinasi
        public function editpkt()
        {
            $update = PaketwisataHeader::find(1);
            $logo = DB::table('logo_webs')->get();
            $paketheaders = DB::table('paketwisata_headers')->get();
            return view('admin.taglinepaketwisata', compact('update','logo','paketheaders'));
        }
    
        public function updatdpkt(request $request,$id)
        
            {
                $this->validate(
                    $request,
                    [
                       
                        'caption' => 'required',
                        'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                    ]
                );
                $update = PaketwisataHeader::find($id);
                $file = $update->file_foto;
                if ($request->hasFile('file_foto')) {
                    $file = $request->file('file_foto')->getClientOriginalName();
                    $request->file('file_foto')->move('images/paketheader', $file);
                    $update->file_foto = $file;
                }
    
            $update->tagline = $request->caption;
            $update->file_foto = $file;
            $update->save();
    
            return redirect('/paketwisata');
            }

    public function hapus($id)
    {
        $hapus = PaketWisata::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

}
