<?php

    namespace App\Http\Controllers;

    use App\Credenciada;
    use App\Licenca;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;

    class LicencaController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $licencas = Licenca::all();
            for ($i = 0; $i < $licencas->count(); $i++) {
                $licencas[$i]->credenciada = Credenciada::where('id', $licencas[$i]->credenciada_id)->firstOrFail();
            }
            //dd($licencas);
            return view('licenca.index', compact('licencas'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('licenca.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $licenca = new Licenca();
            $licenca->emissao = $request->emissao;
            $licenca->validade =  $request->validade;
            $licenca->active = true;

            $credenciada = DB::select('select * from credenciadas where cnpj = ?',[$request->cnpj]);
            //dd($credenciada);
            if(empty($credenciada)){
                Session::flash('message', 'CNPJ não encontrado');
                Session::flash('type', 'alert-danger');
                return redirect()->back();
            }
            $licenca->credenciada_id = $credenciada[0]->id;
            $licenca->save();

            return redirect('licenca');
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Licenca $Licenca
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            return Licenca::findOrFail($id);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Licenca $Licenca
         * @return \Illuminate\Http\Response
         */
        public function edit()
        {
            return view('licenca.edit');
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Licenca $Licenca
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Licenca $Licenca)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $licenca = Licenca::findOrFail($id);
            if ($licenca->active) {
                $licenca->active = false;
            } else {
                $licenca->active = true;
            }
            $licenca->save();
            return redirect('licenca');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param Request $request
         * @return \Illuminate\Http\Response
         */
        public function find(Request $request)
        {
            $licencas = DB::select('select * from licencas where validade > date(now()) and credenciada_id = (select id from credenciadas where cnpj = ?)', [$request->cnpj]);
            for ($i = 0; $i < count($licencas); $i++) {
                $licencas[$i]->credenciada = Credenciada::where('id', $licencas[$i]->credenciada_id)->firstOrFail();
            }
            return view('licenca.resultado', compact('licencas'));
        }

        public function findCredenciada(Request $request){
            $credenciada =  Credenciada::where('cnpj',$request->cnpj);
            return view('licenca.create', compact('credenciada'));
        }
    }
