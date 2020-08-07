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
            $user = User::where('email', $request->email)->get()->first();
            if ($user->is_verified == 1) {
                return redirect('/main');
            } else {
                return redirect('/verify/' . $request->email);
            }
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
            'email' => 'required|email|unique:users',
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
            'email' => $user->email,
            'token' => strtoupper(Str::random(5)),
        ]);

        $to_email = $request->email;
        $to_name = $request->name;

        $data = [
            'name' => $request->name,
            'token' => $token->token,
        ];

        Mail::send('email/confirmation', ['data' => $data], function ($m) use ($to_email, $to_name) {
            $m->subject('Account Verification');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to($to_email, $to_name);
        });

        return redirect('/verify/' . $request->email)->with('auth', 'user created');
    }

    public function verify($email)
    {
        $user = User::where('email', $email)->get()->first();
        if ($user == null) {
            return redirect('/')->with('auth', 'no verif');
        }
        $token = Token::where('email', $email)->get();
        $finalToken = null;
        foreach ($token as $t) {
            if (strlen($t->token) === 5) {
                $finalToken = $t->token;
            } else {
                $finalToken = $finalToken;
            }
        }
        if (!$finalToken) {
            return redirect('/')->with('auth', 'no verif');
        }
        return view('auth/verify', compact(['user']));
    }

    public function logout()
    {
    	
    }
}