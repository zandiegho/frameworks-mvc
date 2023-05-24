<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ValidarRolAdmin
{

    public function handle($request, Closure $next)
    {
        /* el aut -> user toma los datos del usario por lo que si validamos, el rol id de la tabla
        users encontramos los permitidos */

        if (auth()->user()->rol_id == 1) {
            return $next($request);
        }
        return redirect('/');
    }
}
