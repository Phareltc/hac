<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\MotdudgController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('accueil.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/calendrier', function () {
    return view('calendrier.calendrier');
});

Route::get('/articles', function () {
    return view('articles.articles');
});


//* ---------  Pages du site --------- *//

Route::get('/evenements', function () {
    return view('screens/evenements');
});
Route::get('/about', function () {
    return view('screens/about');
});
Route::get('/articles', function () {
    return view('screens/articles');
});
Route::get('/articles2', function () {
    return view('screens/articles2');
});
Route::get('/contact', function () {
    return view('screens/contact');
});
Route::get('/plainte', function () {
    return view('screens/plainte');
});
Route::get('/services', function () {
    return view('screens/services');
});

//* ---------  / Pages du site --------- *//

//* ---------  Pages article du dashboard --------- *//

Route::resource('articles', ArticleController::class);

//* ---------  / Pages article du dashboard ---------- *//

// Route::resource('evenements', EvenementController::class); //cette route là est une route globale qui prend en compte toutes mes routes CRUD de mon conroller.
Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.create');
Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');
Route::get('/evenements/{id}', [EvenementController::class, 'show'])->name('evenements.show');
Route::get('/evenements/{id}/edit', [EvenementController::class, 'edit'])->name('evenements.edit');
Route::put('/evenements/{id}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('/evenements/{id}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
Route::get('/evenements/count', [EvenementController::class, 'countEvents'])->name('evenements.count');
Route::get('/', [EvenementController::class, 'welcome'])->name('welcome');
//* ---------  / Routes de la section Evenements dans le dashboard ---------- *//

// Routes CRUD pour MotduDG
Route::get('/motdudg', [MotdudgController::class, 'index'])->name('motdudg.index');
Route::get('/motdudg/create', [MotdudgController::class, 'create'])->name('motdudg.create');
Route::post('/motdudg', [MotdudgController::class, 'store'])->name('motdudg.store');
Route::get('/motdudg/edit', [MotdudgController::class, 'edit'])->name('motdudg.edit');
Route::put('/motdudg', [MotdudgController::class, 'update'])->name('motdudg.update');
Route::delete('/motdudg', [MotdudgController::class, 'destroy'])->name('motdudg.destroy');