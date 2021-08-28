<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Especie;
use App\Funcionario;
use Illuminate\Http\Request;
use App\Proprietario;
use App\Credenciada;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais = Animal::all();
        return view('animal.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especies = Especie::all();
        $proprietario = Proprietario::all();
        return view('animal.create',compact('especies','proprietario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proprietario = Proprietario::findOrFail($request->proprietario_id);
        if (Auth::user()->user_type == 1){
            $funcionario = Funcionario::where('usuario_id',Auth::user()->id)->firstOrFail();
            $credenciada = Credenciada::findOrFail($funcionario->credenciada_id);
        }else{
            $credenciada = Credenciada::where('user_id',Auth::user()->id);
        }

        /*$microship = Animal::select('microship')->where('microship', $request->microship)->get();
        dd($microship);

        if (!$proprietario->id || count($microship) > 0) {
            return redirect('animal');
        }*/

        if (Animal::where('microship',$request->microchip)->exists())
            return redirect('animal');

        $animal = new Animal();
        $animal->tipo_aquisicao = $request->tipo_aquisicao;
        $animal->proprietario_id = $request->proprietario_id;
        $animal->nome = $request->nome;
        $animal->microship = $request->microchip;
        $animal->especie = $request->especie;
        $animal->data_nascimento = $request->data_nascimento;
        $animal->fase = $request->fase;
        $animal->porte = $request->porte;
        $animal->sexo = $request->sexo;
        $animal->pedigree = $request->pedigree;
        $animal->codigo_pedigree = $request->codigo_pedigree;
        $animal->origem_pedigree = $request->origem_pedigree;
        $animal->credenciada_id = $credenciada->id;
        $animal->save();
        return redirect('animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->tipo_aquisicao = $request->tipo_aquisicao;
        $animal->proprietario_id = $request->proprietario_id;
        $animal->nome = $request->nome;
        $animal->microship = $request->microchip;
        $animal->especie = $request->especie;
        $animal->data_nascimento = $request->data_nascimento;
        $animal->fase = $request->fase;
        $animal->porte = $request->porte;
        $animal->sexo = $request->sexo;
        $animal->pedigree = $request->pedigree;
        $animal->codigo_pedigree = $request->codigo_pedigree;
        $animal->origem_pedigree = $request->origem_pedigree;
        $animal->save();
        return redirect('animal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::findOrFail($id)->delete();
        return redirect('animal');
    }

    public function findAnimal(Request $request){
        if (!Animal::where('microship',$request->microchip)->exists())
            return redirect()->back()->withInput()->withErrors('Animal não encontrado');

        $animal = Animal::where('microship',$request->microchip)->firstOrFail();
        $proprietario =  Proprietario::where('id',$animal->proprietario_id)->firstOrFail();
        $credenciada = Credenciada::where('id',$animal->credenciada_id)->firstOrFail();
        if (Auth::user()->user_type == 1){
            $funcionario =  Funcionario::where('usuario_id',Auth::user()->id)->firstOrFail();
            return view('animal.resume',compact('animal','proprietario','credenciada','funcionario'));
        }else if (Auth::user()->user_type == 2){
            $credenciada_auth = Credenciada::where('user_id',Auth::user()->id)->firstOrFail();
            return view('animal.resume',compact('animal','proprietario','credenciada','credenciada_auth'));
        }
        return view('animal.resume',compact('animal','proprietario'));
    }

    public function buscar(){
        return view('animal.buscar');
    }
}
