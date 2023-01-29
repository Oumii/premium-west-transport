<?php

namespace App\Http\Controllers;

use App\Flotte;
use App\Avantage;
use App\Forfait;

use Illuminate\Http\Request;

class FlotteController extends Controller
{
    public function index()
    {
        $flottes = Flotte::all();
        $avantages = Avantage::all();
        $forf = Forfait::get();
        return view('flottes')->with('flottes', $flottes)->with('avantages', $avantages)->with('forf', $forf);
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
     * @param  \App\Flotte  $flotte
     * @return \Illuminate\Http\Response
     */
    public function show(Flotte $flotte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flotte  $flotte
     * @return \Illuminate\Http\Response
     */
    public function edit(Flotte $flotte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flotte  $flotte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flotte $flotte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flotte  $flotte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flotte $flotte)
    {
        //
    }
}
