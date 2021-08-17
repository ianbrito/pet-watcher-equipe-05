<?php

    namespace App\Http\Controllers;

    use App\Credenciada;
    use App\User;
    use Illuminate\Database\QueryException;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use mysql_xdevapi\Exception;

    class CredenciadaController extends Controller
    {
        /**
         *
         */
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
            $credenciadas = Credenciada::all();
            return view('credenciada.index', compact('credenciadas'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('credenciada.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $rules = ['cnpj' => 'required',
                'inscricao_estadual' => 'required',
                'razao_social' => 'required',
                'telefone' => 'required',
                'email' => 'required|email',
                'endereco' => 'required',
                'name' => 'required',
                'email_gestor' => 'required'];

            $this->validate($request, $rules);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email_gestor;
            $user->username = $request->cnpj;
            $user->password = bcrypt($request->cnpj);
            $user->user_type = 2;


            $credenciada = new Credenciada();
            $credenciada->cnpj = $request->cnpj;
            $credenciada->user_id = $user->id;
            $credenciada->inscricao_estadual = $request->inscricao_estadual;
            $credenciada->razao_social = $request->razao_social;
            $credenciada->telefone = $request->telefone;
            $credenciada->email = $request->email;
            $credenciada->endereco = $request->endereco;
            $credenciada->active = true;

            try {
                DB::beginTransaction();
                if ($user->save())
                    $user->refresh();
                $credenciada->save();
                DB::commit();

            } catch (QueryException $exception) {
                DB::rollBack();
                Session::flash('message', 'Ocorreu um erro ao salvar os dados');
                Session::flash('type', 'alert-danger');
                return redirect()->back();
            }
            return view('credenciada.resume', compact('credenciada'));
        }

        /**
         * Display the specified resource.
         *
         * @param \App\credenciada $credenciada
         * @return \Illuminate\Http\Response
         */
        public function show(Credenciada $credenciada)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\credenciada $credenciada
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $credenciada = Credenciada::findOrFail($id);
            return view('credenciada.edit', compact('credenciada'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param $id
         * @return \Illuminate\Http\Response
         */
        public function editPassword($id)
        {
            $credenciada = Credenciada::findOrFail($id);
            $user = User::where('id', $credenciada->user_id)->firstOrFail();
            if (!empty($user))
                return view('credenciada.password', compact('user', 'credenciada'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\credenciada $credenciada
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $rules = ['cnpj' => 'required',
                'inscricao_estadual' => 'required',
                'razao_social' => 'required',
                'telefone' => 'required',
                'email' => 'required|email',
                'endereco' => 'required',
                'name' => 'required',
                'email_gestor' => 'required'];

            $this->validate($request, $rules);

            $credenciada = Credenciada::findOrFail($id);
            $credenciada->cnpj = $request->cnpj;
            $credenciada->inscricao_estadual = $request->inscricao_estadual;
            $credenciada->razao_social = $request->razao_social;
            $credenciada->telefone = $request->telefone;
            $credenciada->email = $request->email;
            $credenciada->endereco = $request->endereco;
            $credenciada->active = ($request->active == 'true') ? true : false;
            $credenciada->save();
            Session::flash('message', 'As informações foram atualizadas');
            Session::flash('type', 'alert-success');
            return redirect('credenciada');
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\credenciada $credenciada
         * @return \Illuminate\Http\Response
         */
        public function updatePassword(Request $request, $id)
        {
            $user = User::findOrFail($id);

            $hash = crypt($request->senha_atual, $user->password);
            if ($hash == $user->password) {
                if ($request->senha_atual == $request->senha_nova) {
                    Session::flash('message', 'A nova senha não pode ser igual a senha atual');
                    Session::flash('type', 'alert-warning');
                    return redirect()->back();
                } else {
                    $user->password = bcrypt($request->senha_nova);
                    $user->save();
                    Session::flash('message', 'A senha foi atualizada com sucesso');
                    Session::flash('type', 'alert-success');
                    return redirect('credenciada');
                }
            }
            Session::flash('message', 'A senha atual incorreta');
            Session::flash('type', 'alert-danger');
            return redirect()->back();
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\credenciada $credenciada
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $credenciada = Credenciada::findOrFail($id);
            if ($credenciada->active) {
                $credenciada->active = false;
            } else {
                $credenciada->active = true;
            }
            $credenciada->save();
            return redirect('credenciada');
        }

        public function resume()
        {
            $credenciada = Credenciada::findOrFail(2);
            return view('credenciada.resume', compact('credenciada'));
        }

    }
