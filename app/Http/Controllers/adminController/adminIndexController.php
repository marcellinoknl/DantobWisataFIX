<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminIndexController extends Controller
{
    public function indexAction() {
        $users = DB::table('users')->count();
        $objek = DB::table('objek_wisata')->count();
        $atraksi = DB::table('atraksi_wisata')->count();
        $fasilitas = DB::table('fasilitas_wisata')->count();
        $event = DB::table('event_wisatas')->count();
        $pengalaman = DB::table('pengalaman_wisata')->count();
       
        return view('admin.admin-index', compact('users','atraksi','objek','fasilitas','event','pengalaman'));
    }


}
