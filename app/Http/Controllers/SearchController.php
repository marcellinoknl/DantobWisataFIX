<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\counter;
class SearchController extends Controller
{
   public function search(){
    $projects = counter::latest()->paginate(5);
    counter::increment('views');
    $logo = DB::table('logo_webs')->get();
    $sosial = DB::table('sosial_media')->get();
    return view('user-page.search', compact('projects','logo','sosial'));
   }
}
