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
})->name('home');

Route::get('/second', function () {
    $courses = [
        [
            'title' => 'Learn PHP',
            'price' => 50,
            'img' => 'https://picsum.photos/200?random=1'
        ],
        [
            'title' => 'Learn JS',
            'price' => 40,
            'img' => 'https://picsum.photos/200?random=2'
        ],
        [
            'title' => 'Learn Python',
            'price' => 55,
            'img' => 'https://picsum.photos/200?random=3'
        ],
        [
            'title' => 'Learn Vue',
            'price' => 80,
            'img' => 'https://picsum.photos/200?random=4'
        ],
        [
            'title' => 'Learn Java',
            'price' => 30,
            'img' => 'https://picsum.photos/200?random=5'
        ],
        [
            'title' => 'Learn Laravel',
            'price' => 50,
            'img' => 'https://picsum.photos/200?random=6'
        ],
        [
            'title' => 'Learn CSS',
            'price' => 20,
            'img' => 'https://picsum.photos/200?random=7'
        ],
    ];
    return view('second', compact('courses'));
})->name('2');

Route::get('/third', function () {
    $courses = [
        [
            'title' => 'Learn PHP',
            'price' => 50,
            'img' => 'https://picsum.photos/200?random=1',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn JS',
            'price' => 40,
            'img' => 'https://picsum.photos/200?random=2',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn Python',
            'price' => 55,
            'img' => 'https://picsum.photos/200?random=3',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn Vue',
            'price' => 80,
            'img' => 'https://picsum.photos/200?random=4',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn Java',
            'price' => 30,
            'img' => 'https://picsum.photos/200?random=5',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn Laravel',
            'price' => 50,
            'img' => 'https://picsum.photos/200?random=6',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
        [
            'title' => 'Learn CSS',
            'price' => 20,
            'img' => 'https://picsum.photos/200?random=7',
            'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus id saepe blanditiis? Aliquid ea eos, provident ullam consectetur ipsam necessitatibus quo veniam mollitia perspiciatis quasi doloremque soluta animi debitis! Maxime, eaque. Tempora minima quod adipisci molestias recusandae, in, nihil cupiditate blanditiis hic mollitia perferendis fugit labore, unde quia nostrum non!'
        ],
    ];
    return view('third',compact("courses"));
})->name('3');
