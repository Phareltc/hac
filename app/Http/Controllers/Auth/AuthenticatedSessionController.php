<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8', // Changé de 6 à 8 pour correspondre au message d'erreur
        ], [
            'email.required' => 'Veuillez entrer votre adresse e-mail.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'password.required' => 'Veuillez entrer votre mot de passe.',
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères minimum.',
        ]);
    
        // Tentative d'authentification
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
    
            return redirect()->intended('dashboard');
        }
    
        // Échec de l'authentification
        return back()->withErrors([
            'email' => 'Les identifiants ne sont pas corrects.',
        ])->withInput($request->only('email'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
