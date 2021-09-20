<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Article;
use \App\Http\Controllers as Controllers;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about', ['ourTeam' => Controllers\PageController::getAboutPage()]);
});
Route::get('/rating', [Controllers\RatingController::class, 'index']);
Route::get('articles', [Controllers\ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('articles_categories', [Controllers\ArticleCategoryController::class, 'index'])
    ->name('articles.categories');
Route::get('articles/{$id}', [Controllers\ArticleController::class, 'show'])
    ->name('articles.show')
    ->where('id', '[0-9]+');
