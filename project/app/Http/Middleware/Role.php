<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Auth;

    class Role
    {
        public function handle($request, Closure $next, $role)
        {
            if (!Auth::check()){
                return redirect('login');
            }

            $user = Auth::user();

            if ($user->user_type == $role){
                return $next($request);
            }

            return redirect('dashboard');
        }

    }
