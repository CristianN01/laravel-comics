<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navComics = [
        [
            "id" => 1,
            "name" => 'Characters',
            "active" => false,
        ],
        [
            "id" => 2,
            "name" => 'comics',
            "active" => true,
        ],
        [
            "id" => 3,
            "name" => 'movies',
            "active" => false,
        ],
        [
            "id" => 4,
            "name" => 'tv',
            "active" => false,
        ],
        [
            "id" => 5,
            "name" => 'games',
            "active" => false,
        ],
        [
            "id" => 6,
            "name" => 'collectibles',
            "active" => false,
        ],
        [
            "id" => 7,
            "name" => 'videos',
            "active" => false,
        ],
        [
            "id" => 8,
            "name" => 'fans',
            "active" => false,
        ],
        [
            "id" => 9,
            "name" => 'news',
            "active" => false,
        ],
        [
            "id" => 10,
            "name" => 'shop',
            "active" => false,
        ],
    ];
    return view('pages.home', compact("navComics"));
});
