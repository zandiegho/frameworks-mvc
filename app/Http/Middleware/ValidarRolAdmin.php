<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ValidarRolAdmin
{

    public function handle($request, Closure $next)
    {
        if (auth()->user()->rol_id == 1) {
            return $next($request);
        }
        return redirect('/');
    }
}
