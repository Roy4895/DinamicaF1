<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorsController extends Controller
{


    public function showLoginForm()
    {
        return view('administrator.auth.login-admin');
    }

    public function authenticate(Request $request)
    {
        $credencialesx = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' =>'1'])) {
            // Authentication passed...
            return redirect()->intended('/administrador/home');
        }else{
                        return back()
            ->withErrors(['emaili' => trans('auth.failed')])
            ->withInput(request(['emaili']))
            ->with('error1','Error en iniciar sesión!');
        }
    }

    public function logout(Request $request) 
    { 
     Auth::guard('admin')->logout();
     return redirect()->route('administrador/login'); 
    } 




    public function __construct()
    {
        $this->middleware('guest')->except('administrador/logout');
    }

}