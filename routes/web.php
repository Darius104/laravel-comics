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
    $array = config('comics');
    $data = [
        'key' => $array
    ];

    return view('home', $data);
});

// in base al numero che l'utente inserisce nell'url restituisco l'element dell'array con id 
// uguale alla richiesta.
Route::get('/card/{id}', function($id) {
    $array = config('comics');
    $card = [];
    $art = [];
    $write = [];

    foreach($array as $element){
        if($element['id'] == $id){
            $card = $element;

            foreach($element['artists'] as $a){
                $art[] = $a;
            }
            foreach($element['writers'] as $b){
                $write[] = $b;
            }
        }
    }

    $data = [
        'card_info' => $card,
        'art_info' => $art,
        'write_info' => $write
    ];

    return view('card', $data);
});
