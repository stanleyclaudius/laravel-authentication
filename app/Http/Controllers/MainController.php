<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function index()
    {
    	$user = User::find(auth()->user()->id);
    	if ($user->is_verified == 0) {
    		Session::pull('log', 'true');
    		Session::pull('email', $user->email);
    		return redirect('/verify/' . $user->email);
    	}
    	return view('main/index', compact(['user']));
    }
}
