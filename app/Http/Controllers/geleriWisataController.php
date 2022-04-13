<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geleriWisataController extends Controller
{
    public function indexAction() {
        return view('user-page.galeri-wisata');
    }
}
