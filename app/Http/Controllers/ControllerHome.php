<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function indexAction()
    {
        $pengalamansaya = DB::table('home')
        ->where('id_user', '=',Auth::user()->id)
        ->get();
       
        return view('user-page/#', ['deskripsi' => $deskripsi]);
    }
    public function edit()
    {
        $update = HomeModel::find($id);
       
        return view('user-page/#', compact('update','deskripsi'));
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
