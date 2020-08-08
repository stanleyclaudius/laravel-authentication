<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function index()
    {
    	$user = User::find(auth()->user()->id);
    	return view('main/index', compact(['user']));
    }
}
