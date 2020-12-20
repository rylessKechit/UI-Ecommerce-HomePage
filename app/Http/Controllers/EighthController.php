<?php

namespace App\Http\Controllers;

use App\Models\eighth;
use Illuminate\Http\Request;

class EighthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eighthSeller = eighth::take(5)->get();
        return view('district.eighth', ['allEighthSellers' => $eighthSeller]);
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
     * @param  \App\Models\eighth  $eighth
     * @return \Illuminate\Http\Response
     */
    public function show(eighth $eighth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eighth  $eighth
     * @return \Illuminate\Http\Response
     */
    public function edit(eighth $eighth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eighth  $eighth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eighth $eighth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eighth  $eighth
     * @return \Illuminate\Http\Response
     */
    public function destroy(eighth $eighth)
    {
        //
    }
}