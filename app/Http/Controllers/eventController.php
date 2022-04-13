<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.event');
    }
}
