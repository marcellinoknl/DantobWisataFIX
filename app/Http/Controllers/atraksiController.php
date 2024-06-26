<?php

namespace App\Http\Controllers;
use App\Models\LogoWeb;
use App\Models\Atraksi_Wisata;
use App\Models\AtraksiHeader;
use App\Models\SampulAtraksi;
use App\Models\counter;
use App\Models\LikeAtraksi;
use App\Models\DeskripsiAtraksiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction()
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $atraksiheaders = DB::table('atraksi_headers')->get();
        $sosial = DB::table('sosial_media')->get();
        $sampul_atraksi = DB::table('sampul_atraksi')->get();
        $deskripsi = DB::table('deskripsiatraksi')->get();
        return view('user-page.blog.atraksi', ['sampul_atraksi' => $sampul_atraksi,'deskripsi' => $deskripsi,'logo' => $logo,'sosial' => $sosial,'projects' => $projects,'atraksiheaders'=>$atraksiheaders]);
    }
    public function kelolaindexAction()
    {
        $atraksi = DB::table('atraksi_wisata')
            ->select('atraksi_wisata.*', 'sampul_atraksi.nama_sampul')
            ->join('sampul_atraksi', 'sampul_atraksi.id', '=', 'atraksi_wisata.id_sampul_atraksi')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.kelolaatraksi', compact('atraksi','logo'));
    }

    public function indexAction2($id)
    {
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $sampul_atraksi = SampulAtraksi::find($id);
        $atrkasi_wisata = DB::table('atraksi_wisata')
            ->where('id_sampul_atraksi', '=', $id)
            ->get();
        return view('user-page.blog.detail1_atraksi_wisata', ['atrkasi_wisata' => $atrkasi_wisata, 'sampul_atraksi' => $sampul_atraksi,'logo' => $logo,'sosial'=>$sosial,'projects'=>$projects]);
    }
    public function kelolaindexActionView($id_atraksi)
    {
        $view = Atraksi_Wisata::find($id_atraksi);
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-atraksi-wisata-view', compact('view','logo'));
    }
    
    public function indexAction3($atraksi_id)
    {
        $projects = counter::latest()->paginate(5);
        Atraksi_Wisata::find($atraksi_id)->increment('views');
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $atraksi_wisata_detail = Atraksi_Wisata::find($atraksi_id);
        $like = LikeAtraksi::where('atraksi_id',$atraksi_wisata_detail->atraksi_id)->count();
        return view('user-page.blog.detail2_atraksi_wisata', ['atraksi_wisata_detail' => $atraksi_wisata_detail,'logo' => $logo,'sosial'=>$sosial,'projects'=>$projects,'like'=>$like]);
    }


    public function tambah()
    {
        $sampul = SampulAtraksi::all();
        $logo = DB::table('logo_webs')->get();

        return view('admin.tambah-atraksi-wisata', compact('sampul','logo'));
    }



    public function store(Request $request)
    {   
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'nama_sampul' => 'required', 
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200',
                'deskripsi' => 'required'
                
                                          
                
            ]
        );
        $objek = new Atraksi_Wisata();
        $objek->judul = $request->judul;
        $objek->id_sampul_atraksi = $request->nama_sampul;
        $objek->deskripsi = $request->deskripsi;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/Atraksi', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('kelolaatraksi');
    }

    public function edit($atraksi_id)
    {
        $update = Atraksi_Wisata::find($atraksi_id);
        $kategori = DB::table('sampul_atraksi')->get();
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-atraksiwisata', compact('update', 'kategori','logo'));
    }

    public function update(request $request, $atraksi_id)
    {   
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'nama_sampul' => 'required', 
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',           
                'deskripsi' => 'required'
                                          
                
            ]
        );
        $update = Atraksi_Wisata::find($atraksi_id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/Atraksi', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update->id_sampul_atraksi = $request->nama_sampul;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('kelolaatraksi');
    }

    public function hapus($atraksi_id)
    {
        $hapus = Atraksi_Wisata::find($atraksi_id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

    //sampul atraksi
    public function kelolaindexActionSampul()
    {
        $sampulatraksi = SampulAtraksi::all();
        $logo = DB::table('logo_webs')->get();
        
        return view('admin.sampul-atraksi', compact('sampulatraksi','logo'));
    }
    public function editat($id)
    {
        $update = DeskripsiAtraksiModel::find($id);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.ubah-deskripsiatraksi', compact('update','logo'));
    }

    public function updateat(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_atraksi' => 'required',
                    'deskripsi_atraksi' => 'required'
                ]
            );
        $update = DeskripsiAtraksiModel::find($id);
        $update->judul = $request->judul_atraksi;
        $update->deskripsi = $request->deskripsi_atraksi;
        $update->save();

        return redirect('/atraksi');
        }
    public function tambahsampul()
    {
        $logo = DB::table('logo_webs')->get();
        return view('admin.tambah-sampul-atraksi', ['logo' => $logo]);
    }

    public function storesampul(Request $request)
    {
        $this->validate(
            $request,
            [
                
                'nama_sampul' => 'required', 
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                
                                          
                
            ]
        );
        $sampul = new SampulAtraksi();
        $sampul->nama_sampul = $request->nama_sampul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/Atraksi', $file);
            $sampul->file_foto = $file;
        }

        $sampul->save();
        return redirect('sampul-atraksi');
    }

    public function editsampul($id)
    {
        $update = SampulAtraksi::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-sampulatraksi', compact('update','logo'));
    }

    public function updatesampul(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_sampul' => 'required',
                
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

        return redirect('sampul-atraksi');
    }

//header paket wisata
public function editatr()
{
    $update = AtraksiHeader::find(1);
    $logo = DB::table('logo_webs')->get();
    $atraksiheaders = DB::table('atraksi_headers')->get();
    return view('admin.taglineatraksi', compact('update','logo','atraksiheaders'));
}

public function updateatr(request $request,$id)

    {
        $this->validate(
            $request,
            [
               
                'tagline' => 'required',
                'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $update = AtraksiHeader::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/atraksiheader', $file);
            $update->file_foto = $file;
        }

    $update->tagline = $request->tagline;
    $update->file_foto = $file;
    $update->save();

    return redirect('/atraksi');
    }


    public function hapusSampul($id)
    {
        $hapus = SampulAtraksi::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
