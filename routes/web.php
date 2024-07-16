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

    $dcComicsLinks = [
        [
            'id' => 1,
            'name' => 'Characters',
        ],
        [
            'id' => 2,
            'name' => 'Comics',
        ],
        [
            'id' => 3,
            'name' => 'Movies',
        ],
        [
            'id' => 4,
            'name' => 'TV',
        ],
        [
            'id' => 5,
            'name' => 'Games',
        ],
        [
            'id' => 6,
            'name' => 'Videos',
        ],
        [
            'id' => 7,
            'name' => 'News',
        ],
    ];

    $DcLinks = [
        [
            'id' => 1,
            'name' => 'Terms Of Use',
        ],
        [
            'id' => 2,
            'name' => 'Privacy policy (New)',
        ],
        [
            'id' => 3,
            'name' => 'Ad Choices',
        ],
        [
            'id' => 4,
            'name' => 'Advertising',
        ],
        [
            'id' => 5,
            'name' => 'Jobs',
        ],
        [
            'id' => 6,
            'name' => 'Subscriptions',
        ],
        [
            'id' => 7,
            'name' => 'Talent Workshop',
        ],
        [
            'id' => 8,
            'name' => 'CPSC Certificates',
        ],
        [
            'id' => 9,
            'name' => 'Ratings',
        ],
        [
            'id' => 10,
            'name' => 'Shop Help',
        ],
        [
            'id' => 11,
            'name' => 'Contact Us',
        ],
    ];

    $sitesLink = [
        [
            'id' => 1,
            'name' => 'DC',
        ],
        [
            'id' => 2,
            'name' => 'MAD Magazine',
        ],
        [
            'id' => 3,
            'name' => 'DC Kids',
        ],
        [
            'id' => 4,
            'name' => 'DC Universe',
        ],
        [
            'id' => 5,
            'name' => 'DC Power Visa',
        ],
    ];

    $shopLinks = [
        [
            'id' => 1,
            'name' => 'Shop DC',
        ],
        [
            'id' => 2,
            'name' => 'Shop DC Collectibles',
        ],
    ];

    $socialsLinks = [
        [
            'id' => 1,
            'img' => './src/assets/img/footer-facebook.png',
        ],
        [
            'id' => 2,
            'img' => './src/assets/img/footer-periscope.png',
        ],
        [
            'id' => 3,
            'img' => './src/assets/img/footer-pinterest.png',
        ],
        [
            'id' => 4,
            'img' => './src/assets/img/footer-twitter.png',
        ],
        [
            'id' => 5,
            'img' => './src/assets/img/footer-youtube.png',
        ],
    ];

    return view('pages.home', compact("navComics", "dcComicsLinks", "DcLinks", "sitesLink", "shopLinks", "socialsLinks"));
});
