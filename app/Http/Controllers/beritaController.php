<?php

namespace App\Http\Controllers;
use App\Models\Berita_Wisata;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.berita');
    }

    public function kelolaindexAction() {
        $kelolaberita = Berita_Wisata::all();
        return view('admin.kelolaberita',compact('kelolaberita'));
    }
}
