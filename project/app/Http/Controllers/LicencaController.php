<?php

namespace App\Http\Controllers;

use App\Licenca;
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
        return view('');
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
    public function edit(Licenca $licenca)
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
    public function update(Request $request, Licenca $licenca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenca $licenca)
    {
        //
    }
}
