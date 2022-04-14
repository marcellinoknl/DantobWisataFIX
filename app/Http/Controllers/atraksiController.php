<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.atraksi');
    }
    public function kelolaindexAction() {
        return view('admin.kelolaatraksi');
    }
}
