<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\counter;
use App\Models\GaleriWisata;
use App\Models\Objek_Wisata;
use App\Models\PaketWisata;
use App\Models\search;
class SearchController extends Controller
{
   public function search(){

    $paket = PaketWisata::latest()->filter(request(['search']))->get();
    $merchandise = GaleriWisata::latest()->filter(request(['search']))->get();

    $projects = counter::latest()->paginate(5);
    counter::increment('views');
    $logo = DB::table('logo_webs')->get();
    $search = DB::table('searches')->get();
    $sosial = DB::table('sosial_media')->get();
    // $paket = DB::table('paket_wisatas')->get();
    return view('user-page.search', compact('projects','logo','sosial','search','paket','merchandise'));
   }
     //header FASIL
     public function editfas()
     {
         $update = search::find(1);
         $logo = DB::table('logo_webs')->get();
         $search = DB::table('searches')->get();
         return view('admin.taglinesearch', compact('update','logo','search'));
     }
 
     public function updatfas(request $request,$id)
     
         {
             $this->validate(
                 $request,
                 [
                    
                     'caption' => 'required',
                     'file_foto' => 'mimes:jpeg,jpg,png,gif','max:5000' ,'dimensions:max_width=1200'
                 ]
             );
             $update = search::find($id);
             $file = $update->file_foto;
             if ($request->hasFile('file_foto')) {
                 $file = $request->file('file_foto')->getClientOriginalName();
                 $request->file('file_foto')->move('images/search', $file);
                 $update->file_foto = $file;
             }
 
         $update->tagline = $request->caption;
         $update->file_foto = $file;
         $update->save();
 
         return redirect('/search');
         }
}
