<?php

namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function login(LoginRequest $request): string|RedirectResponse
    {
        if (Auth::attempt([
            "email" => $request->validated("email"),
            "password" => $request->validated("password")
        ], true)){
            $request->session()->regenerate();
            return redirect()->route("homepage");
        }

        return back()->withErrors([
            'message' => 'Что-то пошло не так, попробуйте в другой раз.',
        ]);

    }

    public function register(RegistrationRequest $request): string|RedirectResponse
    {
        $user = User::query()->create($request->validated());
        if(Auth::attempt([
                            "email" => $request->validated("email"),
                            "password" => $request->validated("password")
        ], true)){
            $request->session()->regenerate();
            return redirect()->route("homepage");
        }

        return redirect()->back()->withErrors([
            'message' => 'Что-то пошло не так, попробуйте в другой раз.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
