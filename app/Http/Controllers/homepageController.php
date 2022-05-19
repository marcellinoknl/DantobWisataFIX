<?php

namespace App\Http\Controllers;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homepageController extends Controller
{
    public function indexAction() {
        $objekwisata = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(1)->get();
        $objekwisataa = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(8)->get();
        return view('user-page.homepage-index',compact('objekwisata','objekwisataa'));
    }
    
    // public function indexUserDestinasi(id_obj_wisata){
    //     $objek_wisata_detail = Objek_Wisata::find($id_obj_wisata);
    //     return view('user-page.detail2_objek_wisata', ['objek_wisata_detail' => $objek_wisata_detail]);
    // }
}
