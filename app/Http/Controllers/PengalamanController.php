<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Objek_Wisata;
use App\Models\PengalamanWisata;
use Illuminate\Http\Request;
use Auth;

class PengalamanController extends Controller
{
    public function indexAction()
    {
        $pengalaman = DB::table('pengalaman_wisata')
        ->where('status','=',"approved")
        ->get();
        
        return view('user-page.pengalaman', ['pengalaman' => $pengalaman]);
    }
    public function indexActiontambahpengalaman()
    {
        $pengalamanplus = DB::table('pengalaman_wisata')->get();
        return view('user-page.tambah-pengalaman', ['pengalamanplus' => $pengalamanplus]);
    }
//pengalaman saya

    public function indexActionpengalamansaya()
    {
        $pengalamansaya = DB::table('pengalaman_wisata')
        ->where('id_user', '=',Auth::user()->id)
        ->get();
       
        return view('user-page.pengalaman-wisata-saya', ['pengalamansaya' => $pengalamansaya]);
    }


    public function editPengalamanSaya($id_pengalaman){
        $updates = PengalamanWisata::find($id_pengalaman);
        return view('user-page/edit-pengalaman-wisata-saya', compact('updates'));
    }

    public function updatePengalamanSaya(request $request, $id_pengalaman)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required'
                
               
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
            ->get();
        return view('admin.kelola-pengalaman-wisata', compact('pengalaman'));
    }

    public function kelolaindexAction2()
    {
        $persetujuan = DB::table('pengalaman_wisata')
            ->select('pengalaman_wisata.*', 'users.name')
            ->join ('users', 'users.id', '=', 'pengalaman_wisata.id_user')
            ->where ('pengalaman_wisata.status','=','pending')
            ->get();
        return view('admin.persetujuan-pengalaman-wisata', compact('persetujuan'));
    }

    public function editpersetujuan($id_pengalaman){
            $update = PengalamanWisata::find($id_pengalaman);
            return view('admin/edit-persetujuan', compact('update'));
    }
    public function editpengalaman($id_pengalaman){
        $update = PengalamanWisata::find($id_pengalaman);
        return view('admin/ubah-pengalaman', compact('update'));
}

    public function kelolaindexActionView($id_pengalaman)
    {
        $viewpersetujuan = PengalamanWisata::find($id_pengalaman);
        return view('admin.lihat-persetujuan', compact('viewpersetujuan'));
    }

    public function update(request $request, $id_pengalaman)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
               
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
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
               
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


    public function tambah()
    {
        $pengalaman = PengalamanWisata::all();
        // $kategori = Kategori_Wisata::all();
        return view('admin.tambah-pengalaman-wisata', compact('pengalaman'));
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
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
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
               
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
