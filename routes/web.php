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
            "name" => 'CHARACTERS',
            "active" => false,
        ],
        [
            "id" => 2,
            "name" => 'COMICS',
            "active" => true,
        ],
        [
            "id" => 3,
            "name" => 'MOVIES',
            "active" => false,
        ],
        [
            "id" => 4,
            "name" => 'TV',
            "active" => false,
        ],
        [
            "id" => 5,
            "name" => 'GAMES',
            "active" => false,
        ],
        [
            "id" => 6,
            "name" => 'COLLECTIBITES',
            "active" => false,
        ],
        [
            "id" => 7,
            "name" => 'VIDEOS',
            "active" => false,
        ],
        [
            "id" => 8,
            "name" => 'FANS',
            "active" => false,
        ],
        [
            "id" => 9,
            "name" => 'NEWS',
            "active" => false,
        ],
        [
            "id" => 10,
            "name" => 'SHOP',
            "active" => false,
        ],
    ];
    return view('pages.home', compact("navComics"));
});
