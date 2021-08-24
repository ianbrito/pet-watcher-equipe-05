<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\User;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
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
        //
        $funcionarios = Funcionario::withTrashed()->get()->all();
        return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcionario.create');
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
        $rules = [
            'nome' => 'required|string',
            'cpf' => 'required',
            'telefone' => 'required|numeric',
            'email' => 'required|email',
            'endereco' => 'required'
        ];

        $this->validate($request, $rules);

        $user = new User();
        $user->name = $request->nome;
        $user->username = $request->cpf;
        $user->email = $request->email;
        $user->password = bcrypt($request->cpf);
        $user->user_type = 1;
        $user->save();

        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->telefone = $request->telefone;
        $funcionario->email = $request->email;
        $funcionario->endereco = $request->endereco;
        $funcionario->usuario_id = $user->id;
        $funcionario->save();

        return redirect('funcionarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'nome' => 'required|string',
            'cpf' => 'required',
            'telefone' => 'required|numeric',
            'email' => 'required|email',
            'endereco' => 'required'
        ];

        $this->validate($request, $rules);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->telefone = $request->telefone;
        $funcionario->email = $request->email;
        $funcionario->endereco = $request->endereco;
        $funcionario->save();

        return redirect('funcionarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuarioFuncionario = Funcionario::findOrFail($id);
        Funcionario::findOrFail($id)->delete();
        User::where('id', $usuarioFuncionario->usuario_id)->delete();


        return redirect('funcionarios');
    }
}
