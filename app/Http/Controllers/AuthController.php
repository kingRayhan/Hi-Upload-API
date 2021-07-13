<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    /**
     * @throws AuthenticationException
     */
    public function login(Request $request)
    {
        if(!auth()->attempt($request->only('email', 'password'))){
            throw new AuthenticationException('Invalid credential');
        }

        return response()->noContent();
    }

    public function logout()
    {
        auth()->guard('web')->logout();
    }
}
