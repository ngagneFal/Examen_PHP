<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        // redirects user depending on role. Role Cashier has ID 6 in db
        // when checking against an array of role, use hasAnyRolel(1, 2, etc)
        if (Auth::check() && Auth::user()->type_id==='Entreprise'){
            return redirect()->route('layouts.demandeur.accueil');
        }

        return redirect()->intended(config('layouts.entreprise.accueil'));
    }

}