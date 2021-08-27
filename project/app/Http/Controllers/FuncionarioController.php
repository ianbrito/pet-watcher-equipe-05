<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\User;
use App\Credenciada;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    public function index(Request $request)
    {
        $credenciada = Credenciada::where('user_id',Auth::id())->firstOrFail();
        $funcionarios = Funcionario::where('credenciada_id', $credenciada->id)->get();
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


        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->cpf = $request->cpf;
        $funcionario->telefone = $request->telefone;
        $funcionario->email = $request->email;
        $funcionario->endereco = $request->endereco;

        $credenciada = Credenciada::where('user_id',Auth::id())->firstOrFail();
        $funcionario->credenciada_id = $credenciada->id;

        try {
            DB::beginTransaction();
            $user->save();
            $user->refresh();

            $funcionario->usuario_id = $user->id;
            $funcionario->save();

            DB::commit();

        } catch (QueryException $exception) {
            DB::rollBack();
            return redirect()->back()->withInput()->withErrors('Ocorreu um erro ao salvar os dados'. $exception);
        }

        return redirect('funcionario');
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
            'cpf' => 'required|cpf',
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
        $usuarioFuncionario = Funcionario::findOrFail($id);
        Funcionario::findOrFail($id)->delete();
        User::where('id', $usuarioFuncionario->usuario_id)->delete();


        return redirect('funcionarios');
    }
}
