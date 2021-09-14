<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Article;

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
    $team = [
        ['name' => 'Hodor', 'position' => 'programmer'],
        ['name' => 'Joker', 'position' => 'CEO'],
        ['name' => 'Elvis', 'position' => 'CTO'],
    ];
    return view('about', ['ourTeam' => $team]);
});

Route::get('/articles', function () {
    $aResult = new Article();
    return view('articles', ['allPosts' => $aResult->getAll()->toArray()]);
});
