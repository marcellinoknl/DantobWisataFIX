<?php

namespace App\Http\Controllers;
use App\Models\Kabupaten;
use App\Models\DesaWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DesaWisataController extends Controller
{
    public function indexAction()
    {
        $objwisatakabupaten = DB::table('objwisatakabupaten')->get();

        return view('user-page.blog.desawisata.desawisata', compact('objwisatakabupaten'));
    }

    public function kelolaindexActionView($id)
    {
        $view = DesaWisata::find($id);
        return view('admin.desawisata.lihat-desawisata', compact('view'));
    }

    public function kelolaindexAction()
    {

        $desawisatas = DB::table('desa_wisatas')
            ->select('desa_wisatas.*', 'objwisatakabupaten.nama_kab')
            ->join('objwisatakabupaten', 'objwisatakabupaten.id_obj_wisata_kabupaten', '=', 'desa_wisatas.id_obj_wisata_kabupaten')
            ->get();
        return view('admin.desawisata.keloladesawisata', compact('desawisatas'));
    }


    //user
    public function indexAction2($id_obj_wisata_kabupaten)
    {
        
        $objwisatakabupaten = Kabupaten::find($id_obj_wisata_kabupaten);
        $desawisatas = DB::table('desa_wisatas')
            ->where('id_obj_wisata_kabupaten', '=', $id_obj_wisata_kabupaten)
            ->get();
        
        $objwisatakabupatenfilter = DB::table('objwisatakabupaten')->get();
        return view('user-page.blog.desawisata.detail1_desa_wisata', ['desawisatas' => $desawisatas, 'objwisatakabupaten' => $objwisatakabupaten,'objwisatakabupatenfilter'=>$objwisatakabupatenfilter]);
    }

    public function indexAction3($id)
    {

        $desawisatadetails = DesaWisata::find($id);
        return view('user-page.blog.desawisata.detail2_desa_wisata', ['desawisatadetails' => $desawisatadetails]);
    }
    
    public function tambah()
    {
        $kabupaten = Kabupaten::all();
        return view('admin.desawisata.tambah-desawisata', compact('kabupaten'));
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
        return view('admin.desawisata.edit-desawisata', compact('update', 'kabupaten'));
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
