<?php

namespace App\Http\Controllers;

use App\Models\counter;
use App\Models\Objek_Wisata;
use Illuminate\Http\Request;
use App\Models\SosialModel;
use App\Models\HomeModel;
use App\Models\Tagline;


use Illuminate\Support\Facades\DB;
class homepageController extends Controller
{
    public function indexAction() {
        $projects = counter::latest()->paginate(5);
        $logos = DB::table('taglines')->get();
        counter::increment('views');
        $logo = DB::table('logo_webs')->get();
        $sosial = DB::table('sosial_media')->get();
        $objekwisata = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(1)->get();
        $objekwisataa = DB::table('objek_wisata')->orderBy('created_at','desc')->limit(8)->get();
        $event = DB::table('sampul_event')->orderBy('created_at','desc')->limit(4)->get();
        $deskripsi = DB::table('home')->get();
        return view('user-page.homepage-index',compact('objekwisata','objekwisataa','event','deskripsi','logo','sosial','projects','logos'));
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
    }
    public function edittag()
    {
       
        $update = Tagline::find(1);
        $logo = DB::table('logo_webs')->get();
        $logos = DB::table('taglines')->get();
       
        return view('admin.kelolalaTagline', compact('update','logo','logos'));
    }

    public function updatetag(request $request,$id)
    
        {
            $this->validate(
                $request,
                [
                    
                   
                    'tag2' => 'required',
                    'tag3' => 'required',
                    'file_foto' => 'required|mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                   

                ]
            );
           
            $update = Tagline::find($id);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/beranda', $file);
                $update->file_foto = $file;
            }
            

           
            $update->tagline2 = $request->tag2;
            $update->tagline3 = $request->tag3;
            $update->file_foto = $file;
           
            $update->save();
        return redirect('/');
        }

}



