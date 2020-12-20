<?php

namespace App\Http\Controllers;

use App\Models\three;
use Illuminate\Http\Request;

class ThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.three-add');
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
        $three = new Three;

        $three->name = $request->input('three-product-name');
        $three->price = $request->input('three-product-price');

        $three->save();

        return redirect()->route('admin')->with('Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\three  $three
     * @return \Illuminate\Http\Response
     */
    public function show(three $three)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\three  $three
     * @return \Illuminate\Http\Response
     */
    public function edit(three $three)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\three  $three
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, three $three)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\three  $three
     * @return \Illuminate\Http\Response
     */
    public function destroy(three $three)
    {
        //
    }
}