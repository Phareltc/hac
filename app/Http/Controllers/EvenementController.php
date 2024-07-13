<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les événements
        $evenements = Evenement::all();

        // Passer les événements à la vue
        return view('screensdash.evenements.evenements', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourner une vue pour créer un nouvel événement
        return view('screensdash.evenements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'titre' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'info' => 'nullable|string',
        ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Créer un nouvel événement
        Evenement::create([
            'titre' => $request->titre,
            'lieu' => $request->lieu,
            'photo' => $photoPath ?? null,
            'description' => $request->description,
            'info' => $request->info,
            'user_id' => auth()->id(), // Utiliser l'ID de l'utilisateur authentifié
        ]);

        // Rediriger vers la liste des événements
        return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer l'événement par ID
        $evenement = Evenement::findOrFail($id);

        // Retourner une vue pour afficher les détails d'un événement
        return view('screens.evenements', compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupérer l'événement par ID
        $evenement = Evenement::findOrFail($id);

        // Retourner une vue pour éditer un événement
        return view('screensdash.evenements.edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valider les données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'info' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        // Récupérer l'événement par ID
        $evenement = Evenement::findOrFail($id);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($evenement->photo) {
                Storage::disk('public')->delete($evenement->photo);
            }
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Mettre à jour l'événement
        $evenement->update($validated);

        // Rediriger vers la liste des événements
        return redirect()->route('evenements.index')->with('success', 'Événement mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupérer l'événement par ID
        $evenement = Evenement::findOrFail($id);

        // Supprimer la photo associée si elle existe
        if ($evenement->photo) {
            Storage::disk('public')->delete($evenement->photo);
        }

        // Supprimer l'événement
        $evenement->delete();

        // Rediriger vers la liste des événements
        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès');
    }

    /**
     * Display a limited number of events on the welcome page.
     */
    public function welcome()
    {
        // Récupérer un nombre limité d'événements
        $evenements = Evenement::limit(4)->get();

        // Retourner la vue avec les événements
        return view('welcome', compact('evenements'));
    }
}
