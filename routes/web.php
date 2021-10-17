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
// about
Route::get('/about', function () {
    return view('about', ['ourTeam' => Controllers\PageController::getAboutPage()]);
});

// rating
Route::get('/rating', [Controllers\RatingController::class, 'index']);

// articles
Route::resource('articles', Controllers\ArticleController::class)->shallow();
Route::resource('articles.comments', Controllers\ArticleCommentsController::class);

// articles_categories
Route::get('articles_categories', [Controllers\ArticleCategoryController::class, 'index'])
    ->name('articles.categories');
Route::get('articles_categories/{id}', [Controllers\ArticleCategoryController::class, 'show'])
    ->name('articles.categories.show')
    ->where('id', '[0-9]+');
Route::delete('articles_categories/{id}/delete', [Controllers\ArticleCategoryController::class, 'destroy'])
    ->name('articles.destroy');
Route::get('articles_categories/{id}/edit', [Controllers\ArticleCategoryController::class, 'edit'])
    ->name('articles.edit');
Route::post('articles_categories/{id}/edit', [Controllers\ArticleController::class, 'update'])
    ->name('articles_categories.update');
