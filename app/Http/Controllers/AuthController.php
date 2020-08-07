<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Token;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|uniue:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(10),
            'is_verified' => 0,
        ]);

        $token = Token::create([
            'user_id' => $user->id,
            'token' => strtoupper(Str::random(5)),
        ]);

        $to_email = $request->email;
        $to_name = $request->name;

        $data = [
            'token' => $token->token,
        ];

        Mail::send('email/confirmation', ['data' => $data], function ($m) use ($to_email, $to_name) {
            $m->subject('Account Verification');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to($to_email, $to_name);
        });

        return redirect('/')->with('auth', 'user created');
    }

    public function logout()
    {
    	
    }
}