<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SobreNosController,
                              MainController,
                           ContatoController,
                             TesteController,
                        FornecedorController,};


Route::get('/', [MainController::class, 'main'])->name('site.main');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function() {return 'Login';})->name('site.login');

Route::prefix('/app')->group(function()
{
    Route::get('/clientes', function() {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() {return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');

Route::fallback(function()
{
    return "A url acessada não existe. <a href=".route('site.main').">Clique aqui</a> para ser direcionado à página principal!";
});
