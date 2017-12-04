<?php

namespace App\Http\Controllers;

use App\Postad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$postad = postad::all();
        //$postad = DB::table('postad')->get();
        $postad = DB::table('postad')->where('propertyfor', 'Sell')->where('propertytype', 'Apartments')->get();

  
        return view('buy_appartment', ['postad' => $postad]);


    }

    public function sell()
    {
      //$postad = postad::all();
        //$postad = DB::table('postad')->get();
        $postad = DB::table('postad')->where('propertyfor', 'Rent')->get();

  
        return view('buy_shop', ['postad' => $postad]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(home);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Postad::Create($input);
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postad  $postad
     * @return \Illuminate\Http\Response
     */
    public function show(Postad $postad)
    {
       // $postad = Postad::where('pid', $postad->pid)->first();
       // $postad = Postad::find($postad->pid);
      //  return view('postad.details',['postad'=>$postad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postad  $postad
     * @return \Illuminate\Http\Response
     */
    public function edit(Postad $postad)
    {
        //

        // $postad = Postad::find($postad->pid);
       // return view('postad.edit',['postad'=>$postad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postad  $postad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postad $postad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postad  $postad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postad $postad)
    {
        //
    }
}
