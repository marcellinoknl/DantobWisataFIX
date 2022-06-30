<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserModel;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userset = UserModel::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.kelolauser', compact('userset','logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $akunplus = Roles::all();
        $logo = DB::table('logo_webs')->get();


        return view('admin.tambahuser', compact('akunplus','logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users', 
                'role' => 'required', 
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8'
                                          
                
            ]
        );
        $userplus = new UserModel();
        $userplus->name = $request->name;
        $userplus->email = $request->email;
        $userplus->role = $request->role;
        $userplus->password =  Hash::make($request->password);

        $userplus->save();
        return redirect('kelolauser');
    }

    public function edit($id)
    {
        $update = UserModel::find($id);
        $akunplus = Roles::all();
        $logo = DB::table('logo_webs')->get();
        return view('admin.ubahuser', compact('update','akunplus','logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate(
            $request,
            [
                'name' => 'required',
                'role' => 'required', 
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8'
                                          
                
            ]
        );
        $update = UserModel::find($id);
        $update->name = $request->name;
        $update->role = $request->role;
        $update->password =  Hash::make($request->password);
        $update->save();

        return redirect('kelolauser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $hapus = User::find($id);
        if ($hapus->delete()) {
        }
        return redirect()->back();
    }
}
