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
  $comics = config('comics');
  $data = [
    'comics' => $comics
  ];
    return view('homepage', $data);
})->name('homepage');

Route::get('/prodotti/{id}', function ($id) {
  // recupero tutti i fumetti
  $comics = config('comics');
  // verifico se l'id è una chiave dell'array con la funzione array_key_exists
  if (array_key_exists($id, $comics)) {
    // recupero il fumetto corrispondente all'//
    $fumetto = $comics[$id];

    $data = [
      'comic' => $fumetto
    ];

    return view('product', $data);
  }

  abort(404);
})-> name('comic-details') ;
