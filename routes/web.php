<?php

use App\Http\Controllers\ProfileController;
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