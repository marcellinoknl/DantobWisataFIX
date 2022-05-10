<?php

namespace App\Http\Controllers;

use App\Models\Atraksi_Wisata;
use App\Models\SampulAtraksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction()
    {
        $sampul_atraksi = DB::table('sampul_atraksi')->get();
        return view('user-page.blog.atraksi', ['sampul_atraksi' => $sampul_atraksi]);
    }
    public function kelolaindexAction()
    {
        $atraksi = DB::table('atraksi_wisata')
            ->select('atraksi_wisata.*', 'sampul_atraksi.nama_sampul')
            ->join('sampul_atraksi', 'sampul_atraksi.id', '=', 'atraksi_wisata.id_sampul_atraksi')
            ->get();
        return view('admin.kelolaatraksi', compact('atraksi'));
    }

    public function tambah()
    {
        $sampul = SampulAtraksi::all();

        return view('admin.tambah-atraksi-wisata', compact('sampul'));
    }



    public function store(Request $request)
    {
        $objek = new Atraksi_Wisata();
        $objek->judul = $request->judul;
        $objek->id_sampul_atraksi = $request->id_sampul_atraksi;
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
        return view('admin.ubah-atraksiwisata', compact('update', 'kategori'));
    }

    public function update(request $request, $atraksi_id)
    {
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
        return view('admin.sampul-atraksi', compact('sampulatraksi'));
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
            $request->file('file_foto')->move('images/Atraksi', $file);
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

    public function updatesampul(request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_sampul' => 'required',
                // 'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
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
    public function hapusSampul($id)
    {
        $hapus = SampulAtraksi::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
