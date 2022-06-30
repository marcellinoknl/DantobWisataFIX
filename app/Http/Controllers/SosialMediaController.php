<?php

namespace App\Http\Controllers;
use App\Models\LogoWeb;
use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SosialMediaController extends Controller
{
    public function indexAction1(){
        $sosial = DB::table('sosial_media')->get();
        
        return view('user-page.homepage-index',compact('sosial'));
    }
    public function editat()
    {
        $update = SosialMedia::find(1);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.kelolalsosial', compact('update','logo'));
    }
    
    public function updateat(request $request,$id)
    
        {
            $this->validate(
                $request,
                [
                    'caption1' => 'required',
                    'caption2' => 'required',
                    'caption3' => 'required',
                    
                ]
            );
            $update = SosialMedia::find($id);
            $update->facebook = $request->caption1;
            $update->instagram = $request->caption2;
            $update->twitter = $request->caption3;
            $update->save();
    
            return redirect()->back();
}
}

