<?php

namespace App\Http\Controllers;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use App\Models\HomeModel;

use Illuminate\Support\Facades\DB;
class homepageController extends Controller
{
    public function indexAction() {
        $objekwisata = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(1)->get();
        $objekwisataa = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(8)->get();
        $event = DB::table('sampul_event')->orderBy('created_at','desc')->limit(4)->get();
        $deskripsi = DB::table('home')->get();
        return view('user-page.homepage-index',compact('objekwisata','objekwisataa','event','deskripsi'));
    }
    public function edit($id)
    {
        $update = HomeModel::find($id);
       
        return view('admin.ubah-deskripsihome', compact('update'));
    }

    public function update(request $request, $id)
    
        {
            $this->validate(
                $request,
                [
                   
                    'judul_home' => 'required',
                    'deskripsi_home' => 'required'
                ]
            );
        $update = HomeModel::find($id);
        $update->judul = $request->judul_home;
        $update->deskripsi = $request->deskripsi_home;
        $update->save();

        return redirect('/');
    }}

    // public function indexUserDestinasi(id_obj_wisata){
    //     $objek_wisata_detail = Objek_Wisata::find($id_obj_wisata);
    //     return view('user-page.detail2_objek_wisata', ['objek_wisata_detail' => $objek_wisata_detail]);
    // }

