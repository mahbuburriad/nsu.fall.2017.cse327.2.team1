<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
    	$input = $request->all();
    	Postad::create('$input');
    	return redirect('index');
    }
}
