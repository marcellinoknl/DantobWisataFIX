<?php

namespace App\Http\Controllers;
use App\Models\counter;
use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\PengalamanWisata;
use App\Models\DeskripPengalaman;
use Illuminate\Http\Request;
use Auth;

class PengalamanController extends Controller
{
    public function indexAction()
    {
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $pengalaman = DB::table('pengalaman_wisata')
        ->select('pengalaman_wisata.*', 'users.name')
        ->join ('users', 'users.id', '=', 'pengalaman_wisata.id_user')
        ->where('status','=',"approved")
        ->get();
       
        return view('user-page.pengalaman', ['pengalaman' => $pengalaman,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }

    public function indexAction2($id_pengalaman)
    {
        $logo = DB::table('logo_webs')->get();
        $projects = counter::latest()->paginate(5);
        $sosial = DB::table('sosial_media')->get();
        $pengalaman_wisata_detail = PengalamanWisata::find($id_pengalaman);
        return view('user-page.detail-pengalaman-wisata', ['pengalaman_wisata_detail' => $pengalaman_wisata_detail,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }

    public function indexActiontambahpengalaman()
    {
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $pengalamanplus = DB::table('pengalaman_wisata')->get();
        return view('user-page.tambah-pengalaman', ['pengalamanplus' => $pengalamanplus,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }
//pengalaman saya

    public function indexActionpengalamansaya()
    {
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $pengalamansaya = DB::table('pengalaman_wisata')
        ->where('id_user', '=',Auth::user()->id)
        ->get();
        $deskripsi = DB::table('deskripsi_pengalaman')->get();
       
        return view('user-page.pengalaman-wisata-saya', ['pengalamansaya' => $pengalamansaya],['deskripsi' => $deskripsi,'logo'=>$logo,'sosial'=>$sosial,'projects'=>$projects]);
    }
    public function editat($id)
    {
        $update = DeskripPengalaman::find($id);
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubah-deskripspengalaman', compact('update','logo'));
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
    $update = DeskripPengalaman::find($id);
    $update->judul = $request->judul_fasilitas;
    $update->deskripsi = $request->deskripsi_fasilitas;
    $update->save();

    return redirect('/pengalamanwisata-saya');
    }

    public function editPengalamanSaya($id_pengalaman){
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $projects = counter::latest()->paginate(5);
        $pengalamansaya = PengalamanWisata::find($id_pengalaman);
        $updates = PengalamanWisata::find($id_pengalaman);
        return view('user-page/edit-pengalaman-wisata-saya', compact('updates','pengalamansaya','logo','sosial','projects'));
    }

    public function updatePengalamanSaya(request $request, $id_pengalaman)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200'
                
               
            ]
        );
        $update = PengalamanWisata::find($id_pengalaman);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/objekwisata', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('/pengalamanwisata-saya');
    }

//---------------------------------------//
    public function kelolaindexAction()
    {
        $pengalaman = DB::table('pengalaman_wisata')
            ->select('pengalaman_wisata.*', 'users.name')
            ->join('users', 'users.id', '=', 'pengalaman_wisata.id_user')
           ->where('status','=',"approved")
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.kelola-pengalaman-wisata', compact('pengalaman','logo'));
    }

    public function kelolaindexAction2()
    {
        $persetujuan = DB::table('pengalaman_wisata')
            ->select('pengalaman_wisata.*', 'users.name')
            ->join ('users', 'users.id', '=', 'pengalaman_wisata.id_user')
            ->where ('pengalaman_wisata.status','=','pending')
            ->get();
            $logo = DB::table('logo_webs')->get();
        return view('admin.persetujuan-pengalaman-wisata', compact('persetujuan','logo'));
    }

    public function editpersetujuan($id_pengalaman){
            $update = PengalamanWisata::find($id_pengalaman);
            $logo = DB::table('logo_webs')->get();
            return view('admin/edit-persetujuan', compact('update','logo'));
    }
    public function editpengalaman($id_pengalaman){
        $update = PengalamanWisata::find($id_pengalaman);
        $logo = DB::table('logo_webs')->get();
        return view('admin/ubah-pengalaman', compact('update','logo'));
}

    public function kelolaindexActionView($id_pengalaman)
    {
        $viewpersetujuan = PengalamanWisata::find($id_pengalaman);
        $logo = DB::table('logo_webs')->get();
        return view('admin.lihat-persetujuan', compact('viewpersetujuan','logo'));
    }

    public function update(request $request, $id_pengalaman)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200'
               
            ]
        );
        $update = PengalamanWisata::find($id_pengalaman);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/pengalaman', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update-> status = "approved";
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('kelolapengalamanwisata');
    }

    public function updatepersetujuan(request $request, $id_pengalaman)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200'
               
            ]
        );
        $update = PengalamanWisata::find($id_pengalaman);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/pengalaman', $file);
            $update->file_foto = $file;
        }
        $update->judul = $request->judul;
        $update->file_foto = $file;
        $update->deskripsi = $request->deskripsi;
        $update->save();

        return redirect('/persetujuanpengalamanwisata');
    }

    public function approve($id_pengalaman)
    {
 
        $approve = PengalamanWisata::find($id_pengalaman);
        $approve-> status = "approved";
        $approve->save();
        return redirect('/kelolapengalamanwisata');

    }

    public function hapuspersetujuan($id_pengalaman){
        $hapus = PengalamanWisata::find($id_pengalaman);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
    public function hapus($id_pengalaman){
        $hapus = PengalamanWisata::find($id_pengalaman);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

    public function tambah()
    {
        $pengalaman = PengalamanWisata::all();
        $logo = DB::table('logo_webs')->get();
        // $kategori = Kategori_Wisata::all();
        return view('admin.tambah-pengalaman-wisata', compact('pengalaman','logo'));
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $pengalaman = new PengalamanWisata();
        $pengalaman->judul = $request->judul;
        $pengalaman->deskripsi = $request->deskripsi;
        $pengalaman->id_user = Auth::user()->id;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/pengalaman', $file);
            $pengalaman->file_foto = $file;
        }
        $pengalaman-> status = "approved";
        $pengalaman->save();
        return redirect('kelolapengalamanwisata');
    }

    public function TambahPengalaman(Request $request){
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
            $TambahPengalaman = new PengalamanWisata();
            $TambahPengalaman->id_user = Auth::user()->id;
            $TambahPengalaman->judul = $request->judul;
            $TambahPengalaman->deskripsi = $request->deskripsi;
            if ($request->hasFile('file_foto')){
                $file= $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/Pengalaman',$file);
                $TambahPengalaman->file_foto = $file;
            }
            $TambahPengalaman->save();
            return redirect('/pengalamanwisata-saya');
    }

}
