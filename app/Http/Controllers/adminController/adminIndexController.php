<?php

namespace App\Http\Controllers\adminController;
use App\Models\LogoWeb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminIndexController extends Controller
{
    public function indexAction() {
        $logo = DB::table('logo_webs')->get();
        $users = DB::table('users')->count();
        $objek = DB::table('objek_wisata')->count();
        $atraksi = DB::table('atraksi_wisata')->count();
        $fasilitas = DB::table('fasilitas_wisata')->count();
        $event = DB::table('event_wisatas')->count();
        $pengalaman = DB::table('pengalaman_wisata')->count();
       
        return view('admin.admin-index', compact('users','atraksi','objek','fasilitas','event','pengalaman','logo'));
    }

    public function editat()
    {
        $update = LogoWeb::find(1);
        $logo = DB::table('logo_webs')->get();
       
        return view('admin.kelolalogo', compact('update','logo'));
    }

    public function updateat(request $request,$id)
    
        {
            $this->validate(
                $request,
                [
                    'caption' => 'required',
                    'title' => 'required',
                    'file_foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
                    'file_foto' =>'max:3000',
                    'file_foto' =>'dimensions:max_width=1200'
                ]
            );
            $update = LogoWeb::find($id);
            $file = $update->file_foto;
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto')->getClientOriginalName();
                $request->file('file_foto')->move('images/logo', $file);
                $update->file_foto = $file;
            }

        $update->caption = $request->caption;
        $update->title = $request->title;
        $update->file_foto = $file;
        $update->save();

        return redirect('/');
        }

}
