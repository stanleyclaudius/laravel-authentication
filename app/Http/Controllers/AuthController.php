<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth/login');
    }

    public function postLogin(Request $request)
    {
		if (Auth::attempt($request->only('email', 'password'))) {
			return redirect('main/index');
		}
		return redirect('/')->with('auth', 'no credential');
    }

    public function register()
    {
    	return view('auth/register');
    }

    public function postRegister(Request $request)
    {

    }

    public function logout()
    {
    	
    }
}
