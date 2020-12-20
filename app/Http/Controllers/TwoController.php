<?php

namespace App\Http\Controllers;

use App\Models\two;
use Illuminate\Http\Request;

class TwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.two-add');
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
        $two = new Two;

        $two->name = $request->input('two-product-name');
        $two->price = $request->input('two-product-price');

        $two->save();

        return redirect()->route('admin')->with('Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function show(two $two)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function edit(two $two)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, two $two)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function destroy(two $two)
    {
        //
    }
}