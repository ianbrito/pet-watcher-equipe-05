<?php

namespace App\Http\Controllers;

use App\licenca;
use Illuminate\Http\Request;

class LicencaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return licenca::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function edit(licenca $licenca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, licenca $licenca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(licenca $licenca)
    {
        //
    }
}
