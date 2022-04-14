<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function indexAction() {
        return view('user-page.fasilitas');
    }
    public function kelolaindexAction() {
        return view('admin.kelolafasilitas');
    }
}
