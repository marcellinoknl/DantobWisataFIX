<?php

namespace App\Http\Controllers;
use App\Models\EventWisata;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.event');
    }

    public function kelolaindexAction() {

        $eventwisata = EventWisata::all();
        return view('admin.kelolaevent',compact('eventwisata'));
    }
}
