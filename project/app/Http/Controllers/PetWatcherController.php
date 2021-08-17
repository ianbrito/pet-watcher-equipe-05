<?php

    namespace App\Http\Controllers;

    use App\Credenciada;
    use App\Licenca;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Config;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;

    class PetWatcherController extends Controller
    {

        function home()
        {

            if (!Auth::check()) {
                return view('auth.login');
            }

            switch (Auth::user()->user_type) {
                case 3:
                    return view('petwatcher.home');
                    break;
                case 2:
                    $credenciada = Credenciada::where('user_id', Auth::user()->id)->firstOrFail();
                    if (!empty($credenciada)) {
                        $licencas = DB::select('select * from licencas where credenciada_id = ?', [$credenciada->id]);
                        //dd($licencas);
                        if (!$licencas) {
                            Auth::logout();
                            return redirect()->back()->withInput()->withErrors('Não há licenças ativas');
                            break;
                        }

                        foreach ($licencas as $lic) {
                            $lic_date = new \DateTime($lic->validade);
                            $current_date = new \DateTime(date('Y-m-d'));
                            if ($lic_date > $current_date) {
                                $interval = $lic_date->diff($current_date);
                                if ($interval->days < 15) {
                                    Session::flash('message', 'Sua licença expira em '
                                        .$lic_date->format('d/m/Y').'. '.$interval->days.' dia(s) restantes.');
                                    return view('petwatcher.home');
                                    break;
                                }else{
                                    return view('petwatcher.home');
                                    break;
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
