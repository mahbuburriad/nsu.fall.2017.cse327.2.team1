<?php

namespace App\Http\Controllers;

use App\Postad;
use Illuminate\Http\Request;

class PostadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postad - Postad::all();
        return view('postad.index', ['postad'-> $postad]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postad  $postad
     * @return \Illuminate\Http\Response
     */
    public function show(Postad $postad)
    {
        //
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
