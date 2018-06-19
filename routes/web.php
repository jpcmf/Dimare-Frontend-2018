<?php

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
    return view('home');
});
Route::get('/empresa', function () {
    return view('company');
});
Route::get('/onde-comprar', function () {
    return view('where-to-buy');
});
Route::get('/fale-conosco', function () {
    return view('contact');
});
Route::get('/seja-um-lojista', function () {
    return view('be-a-shopkeeper');
});
Route::get('/acompanhe-seu-pedido', function () {
    return view('track-your-order');
});

Route::get('/produtos', function () {
    return view('products');
});
Route::get('/produtos/ambientes', function () {
    return view('products/parts-of-the-house');
});
Route::get('/produtos/diferenciais', function () {
    return view('products/differential');
});
Route::get('/produtos/acabamentos', function () {
    return view('products/finishes');
});
Route::get('/produtos/colecoes', function () {
    return view('products/collections');
});
Route::get('/produtos/colecoes/{colecao_url}', function () {
    return view('products/collection-details');
});

Route::get('/blog', function () {
    return view('blog/list');
});
Route::get('/blog/{post_url}', function () {
    return view('blog/post');
});

Route::get('/blog/{post_url}', function () {
    return view('blog/post');
});

Route::get('/ambients/cozinhas', function () {
    return view('ambients/cozinhas');
});
