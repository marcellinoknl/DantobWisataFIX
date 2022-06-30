<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\LikeAtraksi;
use App\Models\LikeEvent;
use App\Models\LikeBerita;
use App\Models\LikeDesaWisata;
use App\Models\LikeFasilitas;
use App\Models\LikePaketWisata;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($id_obj_wisata){
        $like = Like::where('id_obj_wisata', $id_obj_wisata)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            Like::create([
                'id_obj_wisata' => $id_obj_wisata,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    }   

    public function likeAtraksi($atraksi_id){
        $like = LikeAtraksi::where('atraksi_id', $atraksi_id)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikeAtraksi::create([
                'atraksi_id' => $atraksi_id,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 

    public function likeEvent($id_event){
        $like = LikeEvent::where('id_event', $id_event)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikeEvent::create([
                'id_event' => $id_event,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 

    public function likeBerita($id_berita){
        $like = LikeBerita::where('id_berita', $id_berita)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikeBerita::create([
                'id_berita' => $id_berita,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 

    public function likeDesaWisata($id_desawisata){
        $like = LikeDesaWisata::where('id_desawisata', $id_desawisata)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikeDesaWisata::create([
                'id_desawisata' => $id_desawisata,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 
    public function likeFasilitas($id_fasilitas){
        $like = LikeFasilitas::where('id_fasilitas', $id_fasilitas)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikeFasilitas::create([
                'id_fasilitas' => $id_fasilitas,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 

    public function likePaketWisata($id_paket){
        $like = LikePaketWisata::where('id_paket', $id_paket)->where('id_user',auth()->user()->id)->first();

        if($like){
            $like->delete();
            return back();
        }else{
            LikePaketWisata::create([
                'id_paket' => $id_paket,
                'id_user'=> auth()->user()->id
            ]);
            return back();
        }
    } 
}
