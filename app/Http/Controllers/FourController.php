<?php

namespace App\Http\Controllers;

use App\Models\four;
use Illuminate\Http\Request;

class FourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.four-add');
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
        $four = new Four;

        $four->name = $request->input('four-product-name');
        $four->price = $request->input('four-product-price');

        $four->save();

        return redirect()->route('admin')->with('Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\four  $four
     * @return \Illuminate\Http\Response
     */
    public function show(four $four)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\four  $four
     * @return \Illuminate\Http\Response
     */
    public function edit(four $four)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\four  $four
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, four $four)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\four  $four
     * @return \Illuminate\Http\Response
     */
    public function destroy(four $four)
    {
        //
    }
}