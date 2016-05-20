<?php

namespace  App\Http\Controllers;

use Illuminate\Routing\Controller;

use Laravel\Socialite\Facades\Socialite;

class PagesController extends Controller{


	public function index(){
		return view('login');
	}
	public function getDashboard() {

		return view('dashboard');
	}
	

}