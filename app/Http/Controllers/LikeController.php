<?php

namespace App\Http\Controllers;

use App\Models\Like;
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
}
