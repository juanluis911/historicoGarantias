<?php

namespace App\Http\Controllers;

use App\Models\Garantia;
use Illuminate\Http\Request;

class GarantiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $garantias = Garantia::all();
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
     * @param  \App\Models\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function show(Garantia $garantia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function edit(Garantia $garantia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garantia $garantia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garantia $garantia)
    {
        //
    }
}
