<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (auth()->user()->role->id == config('constants.ROLE_SANTRI')) {
            return redirect()->route('dashboard.santri');
        }

        if (auth()->user()->role->id == config('constants.ROLE_SANTRI')) {
            return redirect()->intended(RouteServiceProvider::PENGUJI);
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
