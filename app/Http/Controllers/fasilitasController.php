<?php

namespace App\Http\Controllers;
use App\Models\Fasilitas;
use App\Models\SampulFasilitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function indexAction() {
        return view('user-page.fasilitas');
    }
    public function kelolaindexActionSampul() {
        $sampulfasilitas = SampulFasilitas::all();
        return view('admin.kelola-sampul-fasilitas',compact('sampulfasilitas'));

    }
    public function kelolaindexActionDaftarFasilitas() {
        $fasilitas = DB::table('fasilitas_wisata')
        ->select('fasilitas_wisata.*','sampul_fasilitas.nama_sampul')
        ->join('sampul_fasilitas', 'sampul_fasilitas.id','=','fasilitas_wisata.id_sampul_fasilitas')
        ->get();
        return view('admin.kelola-fasilitas',compact('fasilitas'));

    }

    public function tambahsampul()
    {
        return view('admin.tambah-sampul-fasilitas');
    }
    public function store(Request $request)
    {
        $objek = new SampulFasilitas();
        $objek->nama_sampul = $request->nama_sampul;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $objek->file_foto = $file;
        }

        $objek->save();
        return redirect('sampul-fasilitas');
    }

    public function tambahfasilitas(){
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get();
        return view('admin.tambah-fasilitas-wisata',compact('sampul_fasilitas'));
    }

    public function storefasilitas(Request $request)
    {
        $fasilitas = new Fasilitas();
       
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->id_sampul_fasilitas = $request->id_sampul_fasilitas; 
        $fasilitas->lokasi = $request->lokasi;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $fasilitas->file_foto = $file;
        }

        $fasilitas->save();
        return redirect('daftar-fasilitas');
    }

    public function editfasilitas($id_fasilitas)
    {
        $update = Fasilitas::find($id_fasilitas);
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get();
        return view('admin.ubah-fasilitaswisata', compact('update','sampul_fasilitas'));
    }
    public function editsampul($id)
    {
        $update = SampulFasilitas::find($id);
        return view('admin.ubah-sampulfasilitas-wisata', compact('update'));
    }

    public function update(request $request, $id_fasilitas)
    {
        $this->validate(
            $request,
            [
                'nama_fasilitas' => 'required',
                'lokasi' => 'required',
                'id_sampul_fasilitas' => 'required',
                'deskripsi' => 'required',
                'file_foto' => 'required|mimes:jpeg,jpg,png,gif'
            ]
        );
        $update = Fasilitas::find($id_fasilitas);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $update->file_foto = $file;
        }
        $update->nama_fasilitas = $request->nama_fasilitas;
        $update->file_foto = $file;
        $update->lokasi = $request->lokasi;
        $update->id_sampul_fasilitas = $request->id_sampul_fasilitas;
        $update->deskripsi = $request->deskripsi;

        $update->save();

        return redirect('daftar-fasilitas');
    }


    public function hapus($id_fasilitas)
    {
        $hapus = Fasilitas::find($id_fasilitas);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }

    public function hapusSampul($id)
    {
        $hapus = SampulFasilitas::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
