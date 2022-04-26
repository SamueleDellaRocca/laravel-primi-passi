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
    $parametri = [
        'testo' => 'Hello World',
    ];
    return view('homepage', $parametri);
});



Route::get('contatti', function () {
    $parametri = [
        'nome' => 'Francesco',
        'cognome' => 'Totti',
        'telefono' => '666 666 666',
    ];
    return view('contatti', $parametri);
});



Route::get('immagini', function () {
    $parametri = [
        'immagine' => 'https://picsum.photos/400/400'
    ];
    return view('immagini', $parametri);
});



Route::get('indirizzi', function () {
    $parametri = [
        'paese' => 'Italia',
        'citta' => 'Roma',
        'via' => 'via dei romanisti',
        'cap' => '00100',

    ];
    return view('indirizzi', $parametri);
});
