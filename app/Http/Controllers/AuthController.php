<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')
            ->except('login', 'register','createToken');
    }

    public function user()
    {
        return auth()->user();
    }


    /**
     * @throws AuthenticationException
     */
    public function login(Request $request)
    {
        if (!auth()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException('Invalid credential');
        }

        return response()->noContent();
    }

    public function createToken(Request $request)
    {
        if (!auth()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException('Invalid credential');
        }

        $token = auth()->user()->createToken('user-token-' . time());
        return response()->json([
            'accessToken' => $token->plainTextToken
        ]);
    }

    public function clearTokens()
    {
        return auth()->user()->tokens()->each(function ($token){
            $token->delete();
        });
    }

    public function myTokens()
    {
        return auth()->user()->tokens;
    }

    public function logout()
    {
        auth()->guard('web')->logout();
    }
}
