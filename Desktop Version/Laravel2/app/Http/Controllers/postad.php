<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use postad;

class postad extends Controller
{


/*
use postad;

protected $redirectTo = '/';

protected function validator(array $data)
    {
        return Validator::make($data, [
            'location' => 'required|string|max:255',
            'propertytype' => 'required|string',
            'propertyfor' => 'required|string',
            'price' => 'required|integer',
            'sqtft' => 'required|integer',
            'bedroom' => 'required|integer',
            'kitchen' => 'required|integer',
            'balcony' => 'required|string',
            'description' => 'required|string',
            
        ]);
    }

     protected function create(array $data)
    {
        return User::create([
           
            'location' => $data['location'],
            'propertytype' => $data['propertytype'],
            'propertyfor' => $data['propertyfor'],
            'price' => $data['price'],
            'sqtft' => $data['sqtft'],
            'bedroom' => $data['bedroom'],
            'kitchen' => $data['kitchen'],
            'balcony' => $data['balcony'],
            'description' => $data['description'],
           
        ]);
    }
    */


    public function store(Request $request)
    {
        $input = $request->all();
        postad::create($input);
        return redirect('index');
    }




}
