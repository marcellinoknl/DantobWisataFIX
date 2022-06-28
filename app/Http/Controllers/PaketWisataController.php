<?php

namespace App\Http\Controllers;
use App\Models\PaketWisata;
use App\Models\DeskripsiPaket;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function indexAction()
    {
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $paketbg = DB::table('paket_wisatas')->inRandomOrder()->get();
        $paket = DB::table('paket_wisatas')->get();
        $deskripsi = DB::table('deskripsi_pakets')->get();

        return view('user-page.paketwisata.paket-wisata', compact('paket','paketbg','deskripsi','logo','sosial'));
    }

    public function kelolaindexActionView($id)
    {
        $view = PaketWisata::find($id);
        return view('admin.paketwisata.lihat-paketwisata', compact('view'));
    }

    public function kelolaindexAction()
    {
        $paketwisatas = PaketWisata::all();
        return view('admin.paketwisata.kelolapaketwisata', compact('paketwisatas'));
    }

    public function indexAction3($id)
    {
        $logo = DB::table('logo_webs')->get();
        $paketwisatadetails = PaketWisata::find($id);
        return view('user-page.paketwisata.detail_paket-wisata', ['paketwisatadetails' => $paketwisatadetails,'logo'=>$logo]);
    }

    public function tambah()
    {
        return view('admin.paketwisata.tambah-paketwisata');
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_paket' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $objek = new PaketWisata();
        $objek->nama_paket = $request->nama_paket;
        $objek->deskripsi = $request->deskripsi;
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
        return view('admin.paketwisata.edit-paketwisata', compact('update'));
    }
    //Deskripsi Paket
    public function editat($id)
    {
        $update = DeskripsiPaket::find($id);
        return view('admin.ubah-deskripsipaket', compact('update'));
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
                'deskripsi' => 'required',
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
        $update->save();

        return redirect('/kelolapaketwisata');
    }

    public function hapus($id)
    {
        $hapus = PaketWisata::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

}
