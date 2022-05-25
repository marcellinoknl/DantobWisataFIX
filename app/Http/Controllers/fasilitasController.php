<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Fasilitas;
use App\Models\SampulFasilitas;
use App\Models\Kabupaten;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function indexAction()
    {
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get(); 
        return view('user-page.fasilitas', ['sampul_fasilitas' => $sampul_fasilitas]);
    }

    public function indexAction2(Request $request,$id)
    {
        $keyword = $request->keyword;
        $sampul_fasilitas = SampulFasilitas::find($id);
        $fasilitias_wisata = DB::table('fasilitas_wisata')
        ->select('fasilitas_wisata.*','users.name','objwisatakabupaten.nama_kab')
        ->join('users', 'fasilitas_wisata.id_user', '=', 'users.id')
        ->join('objwisatakabupaten', 'fasilitas_wisata.id_obj_wisata_kabupaten', '=', 'objwisatakabupaten.id_obj_wisata_kabupaten')
            ->where('id_sampul_fasilitas', '=', $id)
            ->where('nama_fasilitas','LIKE','%'.$keyword.'%')
            ->orderBy('id_fasilitas')
            ->cursorPaginate(6);

            $kabupaten = Kabupaten::all();
        return view('user-page.detail1_fasilitas_wisata', ['fasilitias_wisata' => $fasilitias_wisata, 'sampul_fasilitas' => $sampul_fasilitas,'kabupaten'=>$kabupaten, 'keyword'=>$keyword]);
    }

    public function indexAction3($id_fasilitas)
    {
     
        $fasilitas_wisata_detail = Fasilitas::find($id_fasilitas);
        $fasilitias_wisata_detail_user = DB::table('fasilitas_wisata')
        ->select('users.name','users.id')
        ->join('users', 'fasilitas_wisata.id_user', '=', 'users.id')
        ->where('fasilitas_wisata.id_fasilitas','=',$id_fasilitas)
        ->get();
        return view('user-page.detail2_fasilitas_wisata', ['fasilitas_wisata_detail' => $fasilitas_wisata_detail,'fasilitias_wisata_detail_user'=>$fasilitias_wisata_detail_user]);
    }
    public function kelolaindexActionView($id_fasilitas)
    {
        $view = Fasilitas::find($id_fasilitas);
        return view('admin.kelola-fasilitas-wisata-view', compact('view'));
    }

    public function kelolaindexActionSampul()
    {
        $sampulfasilitas = SampulFasilitas::all();
        return view('admin.kelola-sampul-fasilitas', compact('sampulfasilitas'));
    }
    public function kelolaindexActionDaftarFasilitas()
    {
        $fasilitas = DB::table('fasilitas_wisata')
            ->select('fasilitas_wisata.*', 'sampul_fasilitas.nama_sampul','objwisatakabupaten.nama_kab')
            ->join('sampul_fasilitas', 'sampul_fasilitas.id', '=', 'fasilitas_wisata.id_sampul_fasilitas')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'fasilitas_wisata.id_obj_wisata_kabupaten')
            ->get();
        return view('admin.kelola-fasilitas', compact('fasilitas'));
    }

    public function tambahsampul()
    {
        return view('admin.tambah-sampul-fasilitas');
    }
    public function store(Request $request)
    {   $this->validate(
        $request,
        [
            
            'nama_sampul' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
            
                                      
            
        ]
    );
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

    public function tambahfasilitas()
    {
        $sampul_fasilitas = DB::table('sampul_fasilitas')->get();
        $kabupaten = DB::table('objwisatakabupaten')->get();
        return view('admin.tambah-fasilitas-wisata', compact('sampul_fasilitas','kabupaten'));
    }

    public function storefasilitas(Request $request)
    {    $this->validate(
        $request,
        [
            
            'nama_fasilitas'=>'required',
            'lokasi'=>'required',
            'id_sampul_fasilitas' => 'required', 
            'id_obj_wisata_kabupaten' => 'required', 
            'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200',
            'deskripsi' => 'required'
                                      
            
        ]
    );

        $fasilitas = new Fasilitas();

        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->id_user = Auth::user()->id;
        $fasilitas->id_sampul_fasilitas = $request->id_sampul_fasilitas;
        $fasilitas->id_obj_wisata_kabupaten = $request->id_obj_wisata_kabupaten;
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
        $kabupaten = DB::table('objwisatakabupaten')->get();
        return view('admin.ubah-fasilitaswisata', compact('update', 'sampul_fasilitas','kabupaten'));
    }
    public function editsampul($id)
    {
        $update = SampulFasilitas::find($id);
        return view('admin.ubah-sampulfasilitas-wisata', compact('update'));
    }

    public function updatesampul(request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nama_sampul' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200'
            ]
        );
        $update = SampulFasilitas::find($id);
        $file = $update->file_foto;
        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto')->getClientOriginalName();
            $request->file('file_foto')->move('images/fasilitas', $file);
            $update->file_foto = $file;
        }
        $update->nama_sampul = $request->nama_sampul;
        $update->file_foto = $file;
        $update->save();

        return redirect('sampul-fasilitas');
    }

    public function update(request $request, $id_fasilitas)
    {
        $this->validate(
            $request,
            [
                'nama_fasilitas' => 'required',
                'lokasi' => 'required',
                'file_foto' => 'max:5000' ,'dimensions:max_width=1200',
                'nama_sampul' => 'required',
                'nama_kab' => 'required',
                'deskripsi' => 'required'
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
        $update->id_sampul_fasilitas = $request->nama_sampul;
        $update->id_obj_wisata_kabupaten = $request->nama_kab;
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