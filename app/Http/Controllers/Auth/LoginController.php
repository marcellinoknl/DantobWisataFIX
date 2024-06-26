<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' =>
        $input['password']))) {
            if (auth()->user()->role == 3) {
                return redirect('/admin-wisata')->with('success', "Berhasil login!");
            } else if (auth()->user()->role == 2) {
                return redirect('/admin-wisata')->with('success', "Berhasil login!");
            } else if (auth()->user()->role == 1) {
                return redirect('/')->with('success', "Berhasil login!");
            }
        } else {
            return redirect()->route('login')
                ->with('login', 'Email-Address atau Password salah ! ');
        }
    }
}