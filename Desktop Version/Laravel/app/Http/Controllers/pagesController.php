<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//this class is to control the page redirection and linking
class pagesController extends Controller
{
    //
    public function home()
    {
    	return view('welcome');
    }

    public function login()
    {
    	return view('login');
    }

    public function contact()
    {
    	return view('contact-us');
    }
    public function about()
    {
    	return view('about');
    }
    public function gallery()
    {
    	return view('gallery');
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

Auth();