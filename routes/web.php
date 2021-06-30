<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Accueil', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('accueil');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/accueil', function () {
    return Inertia::render('Accueil');
})->name('accueil');*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');*/

// Article
Route::get('/createArticle', [ArticleController::class, 'create'])
->name('createArticle');

Route::post('/createArticle', [ArticleController::class, 'store']);

Route::get('/articles', [ArticleController::class, 'index'])
->name('articles');

Route::get('/articles/{slug}', [ArticleController::class, 'show'])
->name('article');