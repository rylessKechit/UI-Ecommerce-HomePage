<?php

namespace App\Http\Controllers;

use App\Models\eightenth;
use App\Models\eighth;
use Illuminate\Http\Request;

class EightenthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eightenthSeller = eightenth::take(5)->get();
        return view('district.eigthenth', ['allEightenthSellers' => $eightenthSeller]);
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
     * @param  \App\Models\eightenth  $eightenth
     * @return \Illuminate\Http\Response
     */
    public function show(eightenth $eightenth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eightenth  $eightenth
     * @return \Illuminate\Http\Response
     */
    public function edit(eightenth $eightenth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eightenth  $eightenth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eightenth $eightenth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eightenth  $eightenth
     * @return \Illuminate\Http\Response
     */
    public function destroy(eightenth $eightenth)
    {
        //
    }
}