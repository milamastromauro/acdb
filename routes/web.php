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

Route::get('/cadastro', 'CredencialController@cadastro');
Route::post('/cadastro', 'CredencialController@cadastro');

Route::get('/login', 'CredencialController@login');
Route::post('/login', 'CredencialController@login');

 Route::get('/logout', 'CredencialController@logout');

Route::get('/cadastraprodutos/{par?}', 'CrudController@cadastraProdutos');
Route::post('/cadastraprodutos/{par?}', 'CrudController@cadastraProdutos');

Route::get('/listaprodutos', 'CrudController@listaProdutosAdm');

Route::get('/categoria', 'CrudController@listaProdutos');
Route::get('/index', 'CrudController@listaProdutosDestaque');
Route::get('/', 'CrudController@listaProdutosDestaque');



Route::view('/checkout', 'checkout');
Route::view('/faq', 'faq');
Route::view('/produto', 'produto');
Route::view('/contato', 'contato');

Route::get('/carrinho/{item}', 'CarrinhoController@AdicionaCarrinho');
Route::get('/vercarrinho', 'CarrinhoController@VisualizaCarrinho');

Route::get('/apagaproduto/{item}', 'CrudController@apagaProduto');

Route::get('/listaprodutos', 'CrudController@listaProdutosAdm');

Route::get('/adm', 'CrudController@listaProdutosAdm');

Route::get('/checkout', 'CarrinhoController@checkout');

Route::post('/pesquisa', 'CrudController@buscaProdutos');
