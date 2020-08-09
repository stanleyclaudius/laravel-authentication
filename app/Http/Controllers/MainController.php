<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use Auth;

class MainController extends Controller
{
    public function index()
    {  
        $user = User::find(auth()->user()->id);
    	return view('main/index', ['user' => $user]);
    }
}