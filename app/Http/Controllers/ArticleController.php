<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'date_publication' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        Article::create($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'date_publication' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $article->update($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
