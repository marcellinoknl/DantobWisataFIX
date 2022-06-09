<?php

namespace App\Http\Controllers;
use App\Models\PaketWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function indexAction()
    {
        $paket = DB::table('paket_wisatas')->get();

        return view('user-page.paketwisata.paket-wisata', compact('paket'));
    }

    public function kelolaindexActionView($id)
    {
        $view = PaketWisata::find($id);
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

}
