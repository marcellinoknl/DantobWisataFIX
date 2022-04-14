<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.berita');
    }

    public function kelolaindexAction() {
        return view('admin.kelolaberita');
    }
}
