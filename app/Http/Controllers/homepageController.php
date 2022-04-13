<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function indexAction() {
        return view('user-page.homepage-index');
    }
}
