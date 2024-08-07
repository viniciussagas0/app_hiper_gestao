<?php

use App\Http\Middleware\LogAcessoMiddleware;
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

Route::middleware(LogAcessoMiddleware::class)
->get('/', 'PrincipalController@principal')
->name('site.index');

Route::middleware(LogAcessoMiddleware::class)
->get('/contato', 'ContatoController@contato')
->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')
->name('site.sobrenos');


Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login', function(){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos';})->name('app.produtos');
});

Route::fallback(function() {
    echo 'não existe essa rota. <a href="'.route('site.index').'">Cliente aqui</a> para retornar a página inicial';
});

