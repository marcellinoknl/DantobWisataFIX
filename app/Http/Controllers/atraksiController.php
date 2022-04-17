<?php

namespace App\Http\Controllers;
use App\Models\Atraksi_Wisata;

use Illuminate\Http\Request;

class atraksiController extends Controller
{
    public function indexAction() {
        return view('user-page.blog.atraksi');
    }
    public function kelolaindexAction() {
        
        $atraksi = Atraksi_Wisata::all();
        return view('admin.kelolaatraksi',compact('atraksi'));
    }
    
    public function delete($atraksi_id){
        $del = Atraksi_Wisata::find($atraksi_id);
        if( $del->delete()){
            return view('admin.kelolaatraksi',compact('atraksi'));
        }
  
    }


}

