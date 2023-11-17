<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended(
                        in_array(auth()->user()->rol->codigo, ['ADMIN', 'OPER']) ? route('admin_dashboard') : route('alumno.consultas.listar')
                    );
    }

}