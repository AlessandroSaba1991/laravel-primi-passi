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
    $users = [
        [
            'name' => 'Alessandro',
            'surname' => 'Saba',
            'img' => 'https://picsum.photos/200?random=1'
        ],
        [
            'name' => 'Francesco',
            'surname' => 'Pariotti',
            'img' => 'https://picsum.photos/200?random=2'
        ],
        [
            'name' => 'Gabriele',
            'surname' => 'Faccenda',
            'img' => 'https://picsum.photos/200?random=3'
        ],
        [
            'name' => 'Giulio',
            'surname' => 'Galli',
            'img' => 'https://picsum.photos/200?random=4'
        ],
        [
            'name' => 'Claudia',
            'surname' => 'Mostarda',
            'img' => 'https://picsum.photos/200?random=5'
        ],
        [
            'name' => 'Franca',
            'surname' => 'Altavilla',
            'img' => 'https://picsum.photos/200?random=6'
        ],
        [
            'name' => 'Gino',
            'surname' => 'Pasticcio',
            'img' => 'https://picsum.photos/200?random=7'
        ],
    ];
    return view('homepage', compact("users"));
});
