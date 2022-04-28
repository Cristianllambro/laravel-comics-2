<?php

use Illuminate\Support\Facades\Route;

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
    $card = config('comics');
    $data = [
        'card' => $card,
        'info' => [
            [
                'img' => 'img/buy-comics-digital-comics.png',
                'text' => 'DIGITAL COMICS',
            ],
            [
                'img' => 'img/buy-comics-merchandise.png',
                'text' => 'DC MERCHANDISE',
            ],
            [
                'img' => 'img/buy-comics-subscriptions.png',
                'text' => 'SUBSCRIPTION',
            ],
            [
                'img' => 'img/buy-comics-shop-locator.png',
                'text' => 'COMIC SHOP LOCATOR',
            ],
            [
                'img' => 'img/buy-dc-power-visa.svg',
                'text' => 'DC POWER VISA',
            ],
        ],
    ];
    return view('home', $data);
})-> name('home');

