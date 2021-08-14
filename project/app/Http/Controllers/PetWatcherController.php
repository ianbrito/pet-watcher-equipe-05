<?php

namespace App\Http\Controllers;

use App\Licenca;
    use Illuminate\Support\Facades\Auth;

    class PetWatcherController extends Controller {

    function home() {
        $licenca = Licenca::FindOrFail('1');

        if ($licenca->validade > date('Y-m-d')){
            if (Auth::check()) return view('petwatcher.home');
        }
        Auth::logout();
        return view('auth.login');

    }

}

?>
