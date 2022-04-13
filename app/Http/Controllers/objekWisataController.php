<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class objekWisataController extends Controller
{
    public function indexAction() {
        return view('user-page.objek-wisata');
    }
}
