<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class isLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        // se o usuário estiver logado, não entrar na página
        if (Auth::user()) {
            return redirect('/users/home');
        } else {
        return $next($request);
    }

    }
}
