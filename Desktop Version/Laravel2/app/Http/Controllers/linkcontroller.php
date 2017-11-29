<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkcontroller extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function login()
	{
		return view('login');
	}

	public function buy_house()
	{
		return view('buy_house');
	}

	public function buy_shop()
	{
		return view('buy_shop');
	}

	public function buy_appartment()
	{
		return view('buy_appartment');
	}

	public function buy_openfloor()
	{
		return view('buy_openfloor');
	}

	public function rent_house()
	{
		return view('rent_house');
	}

	public function rent_appartment()
	{
		return view('rent_appartment');
	}

	public function rent_shop()
	{
		return view('rent_shop');
	}
	
	public function app_page()
	{
		return view('app_page');
	}
	public function pricing()
	{
		return view('pricing');
	}

	public function team()
	{
		return view('team');
	}
	public function about()
	{
		return view('about');
	}
	public function account()
	{
		return view('account');
	}
	public function editprofile()
	{
		return view('editprofile');
	}
    
}
