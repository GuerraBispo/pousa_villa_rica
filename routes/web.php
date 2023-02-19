<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home.index');
Route::get('/sobre-nos', 'SobreController@sobre')->name('sobre.index');
Route::get('/acomodacoes', 'DescricaoQuartoController@quarto')->name('quarto.index');
Route::get('/cafe-da-manha', 'CafeManhaController@cafe')->name('cafe.index');
Route::get('/contato', 'ContatoController@contato')->name('contato.index');




