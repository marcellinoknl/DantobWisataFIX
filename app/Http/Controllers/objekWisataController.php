<?php

namespace App\Http\Controllers;
use App\Models\Objek_Wisata;

use Illuminate\Http\Request;

class objekWisataController extends Controller
{
    public function indexAction() {
        return view('user-page.objek-wisata');
    }

    public function kelolaindexAction() {

        $objekwisata = Objek_Wisata::all();
        return view('admin.kelolaobjekwisata',compact('objekwisata'));
    }
    


}
