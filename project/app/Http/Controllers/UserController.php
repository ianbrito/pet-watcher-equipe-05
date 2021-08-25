<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class UserController extends Controller
    {
        //

        public function index() {
            if (Auth::check()){
                switch (Auth::user()->user_type) {
                    case 1:
                        return view('petwatcher.dashboard');
                        break;
                    case 2:
                        return view('petwatcher.manager');
                        break;
                    case 3:
                        return view('petwatcher.admin');
                        break;
                }
            }
            else {
                return view('auth.login');
            }
        }

        public function edit()
        {
            //$user = User::findOrFail($id);
            return view('change_password');
        }

        public function update(Request $request)
        {


            $user = User::findOrFail($request->id);
            $hash = crypt($request->senha_atual, $user->password);

            if ($hash === $user->password) {
                if ($request->senha_atual == $request->senha_nova) {
                    $message = 'A nova senha não pode ser igual a senha atual';
                    $message_type = 'alert-warning';
                    return view('change_password', compact('message', 'message_type'));
                } else {
                    $user->password = bcrypt($request->senha_nova);
                    $user->save();
                    $message = 'A senha foi atualizada com sucesso';
                    $message_type = 'alert-success';

                    switch (Auth::user()->user_type) {
                        case 1:
                            return view('petwatcher.dashboard', compact('message', 'message_type'));
                            break;
                        case 2:
                            return view('petwatcher.manager', compact('message', 'message_type'));
                            break;
                        case 3:
                            return view('petwatcher.admin', compact('message', 'message_type'));
                            break;
                    }
                }
            } else {
                $message = 'A senha atual incorreta';
                $message_type = 'alert-danger';
                return view('change_password', compact('message', 'message_type'));
            }
        }
    }
