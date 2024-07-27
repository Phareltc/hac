<?php

namespace App\Http\Controllers;

use App\Models\Motdudg;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;

class MotdudgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer le mot du dg
        $motdudg = Motdudg::all();

        // Passer le mot du dg à la vue
        return view('motdudg.motdudg', compact('motdudg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourner une vue pour créer un nouveau mot du DG
        return view('motdudg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Déboguer les données de la requête Affiche toutes les données de la requête
        // dd($request->all()); 

        // Valider les données
        $request->validate([
            'nomdg' => 'required|string|max:255',
            'description' => 'required|string',
            'infodg' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Créer un nouvel événement
        Motdudg::create([
            'nomdg' => $request->nomdg,
            'description' => $request->description,
            'infodg' => $request->infodg,
            'mission' => $request->mission,
            'vision' => $request->vision,
            'photo' => $photoPath ?? null,
        ]);

        // Rediriger vers la liste des événements
        return redirect()->route('motdudg.index')->with('success', 'Le mot du Directeur a été créé avec succès.');
    }




    /**
     * Display the specified resource.
     */
    public function show(Motdudg $motdudg)
    {
        // Récupérer le mot du Directeur par ID
        $motdudg = Motdudg::findOrFail($motdudg);

        // Retourner une vue pour afficher le mot du Directeur
        return view('motdudg', compact('motdudg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motdudg $motdudg)
    {
        // Récupérer l'événement par ID
        $motdudg = Motdudg::findOrFail($motdudg);

        // Retourner une vue pour éditer le mot du Directeur
        return view('motdudg.edit', compact('motdudg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motdudg $motdudg)
    {
        // Valider les données
        $validated = $request->validate([
            'nomdg' => 'required|string|max:255',
            'description' => 'required|string',
            'infodg' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Récupérer le mot du Directeur par ID
        $motdudg = Motdudg::findOrFail($motdudg);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Mettre à jour le mot du Directeur
        $motdudg->update($validated);

        // Rediriger vers la liste des événements
        return redirect()->route('evenements.index')->with('success', 'Événement mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motdudg $motdudg)
    {
        // Récupérer l'événement par ID
        $motdudg = Motdudg::findOrFail($motdudg);

        // Supprimer le mot du Directeur
        $motdudg->delete();

        // Rediriger vers la liste des événements
        return redirect()->route('motdudg.index')->with('success', 'Mot du Directeur supprimé avec succès');
    }
}
