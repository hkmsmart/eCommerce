<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


	public function index(){
		return view("front.home");
	}

	public function login()
	{
		return view("front.login");
	}

	public function register()
	{
		return view("front.register");
	}

	public function forget_password()
	{
		return view("front.forget_password");
	}
}

