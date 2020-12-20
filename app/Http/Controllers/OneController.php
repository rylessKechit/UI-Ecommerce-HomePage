<?php

namespace App\Http\Controllers;

use App\Models\one;
use Illuminate\Http\Request;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.one-add');
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
        $one = new One;

        $one->name = $request->input('one-product-name');
        $one->price = $request->input('one-product-price');

        $one->save();

        return redirect()->route('admin')->with('Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\one  $one
     * @return \Illuminate\Http\Response
     */
    public function show(one $one)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\one  $one
     * @return \Illuminate\Http\Response
     */
    public function edit(one $one)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\one  $one
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, one $one)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\one  $one
     * @return \Illuminate\Http\Response
     */
    public function destroy(one $one)
    {
        //
    }
}
