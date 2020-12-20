<?php

namespace App\Http\Controllers;

use App\Models\five;
use Illuminate\Http\Request;

class FiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.five-add');
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
        $five = new Five;

        $five->name = $request->input('five-product-name');
        $five->price = $request->input('five-product-price');

        $five->save();

        return redirect()->route('admin')->with('Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\five  $five
     * @return \Illuminate\Http\Response
     */
    public function show(five $five)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\five  $five
     * @return \Illuminate\Http\Response
     */
    public function edit(five $five)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\five  $five
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, five $five)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\five  $five
     * @return \Illuminate\Http\Response
     */
    public function destroy(five $five)
    {
        //
    }
}