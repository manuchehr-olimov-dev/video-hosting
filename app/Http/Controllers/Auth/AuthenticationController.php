<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Services\Auth\AuthenticationService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    private $authService;

    public function __construct(AuthenticationService $authService){
        $this->authService = $authService;
    }

    public function loginPage(): View|Factory|Application { return view('auth.login'); }
    public function registrationPage(): View|Factory|Application { return view('auth.registration'); }

    public function login(LoginRequest $request): string|RedirectResponse {
        return $this->authService->login($request);
    }

    public function register(RegistrationRequest $request): string|RedirectResponse {
        return $this->authService->register($request);
    }

    public function logout(Request $request): RedirectResponse{
        return $this->authService->logout($request);
    }
}
