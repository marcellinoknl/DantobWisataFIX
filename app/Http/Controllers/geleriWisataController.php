<?php

namespace App\Http\Controllers;
use App\Models\GaleriWisata;

use Illuminate\Http\Request;

class geleriWisataController extends Controller
{
    public function indexAction() {
        return view('user-page.galeri-wisata');
    }
    public function kelolaindexAction() {

        $galeriwisata = GaleriWisata::all();
        return view('admin.kelolagaleri',compact('galeriwisata'));
    }
}
