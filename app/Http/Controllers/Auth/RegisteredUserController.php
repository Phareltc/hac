<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Déboguer les données soumises
        // dd($request->all());

        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'in:homme,femme'],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Suppose que la photo est une URL ou un chemin
            'tel' => ['required', 'string', 'max:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            //'status' => ['required', 'in:Agent,Editorialiste,Super Admin'],
        ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Création de l'utilisateur
        $user = User::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'genre' => $validatedData['genre'],
            'photo' => isset($photoPath) ? $photoPath : null,
            'tel' => $validatedData['tel'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'status' => $validatedData['status'] ?? 'Super Admin', // Défaut à Super Admin
        ]);

        // Vérifier si l'utilisateur est bien créé
        // dd($user);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Inscription réussie!');
    }
}
