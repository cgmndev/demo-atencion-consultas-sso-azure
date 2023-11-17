<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRol
{
    public function handle(Request $request, Closure $next, ...$roles)
    {

        $user = Auth::user();
        if (!in_array($user->rol->codigo, $roles)) {
            // Si el usuario no tiene el rol adecuado, puedes redirigirlo a una página de error o realizar otra acción.
            abort(403, 'No tienes permisos para acceder a esta página.');
        }

        return $next($request);
    }
}
