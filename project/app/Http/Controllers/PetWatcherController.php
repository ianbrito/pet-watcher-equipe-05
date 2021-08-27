<?php

    namespace App\Http\Controllers;

    use App\Credenciada;
    use App\Funcionario;
    use App\Licenca;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Config;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;

    class PetWatcherController extends Controller
    {

        function dashboard()
        {

            if (!Auth::check()) {
                return view('auth.login');
            }

            switch (Auth::user()->user_type) {
                case 1:
                    if (!Funcionario::where('usuario_id', Auth::user()->id)->exists()) {
                        Auth::logout();
                        return redirect()->back()->withInput()->withErrors('Funcionário não encontrado');
                        break;
                    }else{
                        $funcionario = Funcionario::where('usuario_id', Auth::user()->id)->firstOrFail();
                        $licencas = DB::select('select * from licencas where credenciada_id = ?', [$funcionario->credenciada_id]);

                        if (!$licencas) {
                            Auth::logout();
                            return redirect()->back()->withInput()->withErrors('O estabelicimento não possiu licenças ativas');
                            break;
                        }

                        foreach ($licencas as $lic) {
                            if ($lic->active == 1) {
                                $licenca_validade = new \DateTime($lic->validade);
                                $licenca_emissao = new \DateTime($lic->emissao);

                                $current_date = new \DateTime(date('Y-m-d'));
                                if ($licenca_validade >= $current_date && $licenca_emissao <= $current_date) {
                                    $interval = $licenca_validade->diff($current_date);
                                    if ($interval->days < 15) {
                                        Session::flash('message', 'Sua licença expira em '
                                            . $licenca_validade->format('d/m/Y') . '. ' . $interval->days . ' dia(s) restantes.');
                                        return view('petwatcher.dashboard');
                                        break;
                                    } else {
                                        return view('petwatcher.dashboard');
                                        break;
                                    }
                                }
                            }
                        }
                        Auth::logout();
                        return redirect()->back()->withInput()->withErrors('Não há licenças ativas');
                        break;
                    }

                case 3:
                    return view('petwatcher.admin');
                    break;

                case 2:
                    $credenciada = Credenciada::where('user_id', Auth::user()->id)->firstOrFail();
                    if (!empty($credenciada)) {
                        $licencas = DB::select('select * from licencas where credenciada_id = ?', [$credenciada->id]);

                        if (!$licencas) {
                            Auth::logout();
                            return redirect()->back()->withInput()->withErrors('Não há licenças ativas');
                            break;
                        }

                        foreach ($licencas as $lic) {
                            if ($lic->active == 1) {
                                $licenca_validade = new \DateTime($lic->validade);
                                $licenca_emissao = new \DateTime($lic->emissao);

                                $current_date = new \DateTime(date('Y-m-d'));
                                if ($licenca_validade >= $current_date && $licenca_emissao <= $current_date) {
                                    $interval = $licenca_validade->diff($current_date);
                                    if ($interval->days < 15) {
                                        Session::flash('message', 'Sua licença expira em '
                                            . $licenca_validade->format('d/m/Y') . '. ' . $interval->days . ' dia(s) restantes.');
                                        return view('petwatcher.manager');
                                        break;
                                    } else {
                                        return view('petwatcher.manager');
                                        break;
                                    }
                                }
                            }
                        }
                        Auth::logout();
                        return redirect()->back()->withInput()->withErrors('Não há licenças ativas');
                        break;

                    } else {
                        return redirect()->back()->withInput()->withErrors('Erro no login');
                        break;
                    }

            }
        }
    }

?>
