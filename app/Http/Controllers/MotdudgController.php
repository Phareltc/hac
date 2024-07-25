<?php

namespace App\Http\Controllers;

use App\Models\Motdudg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MotdudgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les informations de motdudg
        $motdudg = Motdudg::first();

        // Passer les informations à la vue
        return view('motdudg.motdudg', compact('motdudg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourner une vue pour créer un nouveau motdudg
        return view('motdudg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dg' => 'required|string',
            'mission' => 'required|string',
            'visions' => 'required|string',
            'description' => 'required|string',
        ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Créer ou mettre à jour les informations du motdudg
        Motdudg::updateOrCreate(
            [], // Update existing record
            [
                'photo' => $photoPath ?? null,
                'dg' => $request->dg,
                'mission' => $request->mission,
                'visions' => $request->visions,
                'description' => $request->visions,
            ]
        );

        // Rediriger vers la liste des informations
        return redirect()->route('motdudg.index')->with('success', 'Informations mises à jour avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Récupérer les informations du motdudg
        $motdudg = Motdudg::first();

        // Retourner une vue pour éditer les informations
        return view('motdudg.edit', compact('motdudg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Valider les données
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dg' => 'required|string',
            'mission' => 'required|string',
            'visions' => 'required|string',
            'description' => 'required|string',
        ]);

        // Récupérer les informations du motdudg
        $motdudg = Motdudg::first();

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($motdudg->photo) {
                Storage::disk('public')->delete($motdudg->photo);
            }
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Mettre à jour les informations du motdudg
        $motdudg->update($validated);

        // Rediriger vers la liste des informations
        return redirect()->route('motdudg.index')->with('success', 'Informations mises à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        // Récupérer les informations du motdudg
        $motdudg = Motdudg::first();

        // Supprimer la photo associée si elle existe
        if ($motdudg->photo) {
            Storage::disk('public')->delete($motdudg->photo);
        }

        // Supprimer les informations du motdudg
        $motdudg->delete();

        // Rediriger vers la liste des informations
        return redirect()->route('motdudg.index')->with('success', 'Informations supprimées avec succès.');
    }
}
