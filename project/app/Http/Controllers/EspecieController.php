<?php

namespace App\Http\Controllers;

use App\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especies = Especie::all();
        return view('especie.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especie = new Especie();
        $especie->especie = $request->especie;
        $especie->save();
        return redirect('especie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especie = Especie::findOrFail($id);

        return view('especie.show', compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especie = Especie::findOrFail($id);

        return view('especie.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $especie = Especie::findOrFail($id);
        $especie->especie = $request->especie;
        $especie->save();
        return redirect('especie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $especie = Especie::findOrFail($id);
        $especie->delete();
        return redirect('especie');
    }
}
