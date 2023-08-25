<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Static_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return "Ola seja bem vindo";
});
*/
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobreNos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function(){
    return 'Login';
})->name('site.login');




Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){
        return 'clientes';
    })->name('app.clientes');
    
    Route::get('/fornecedores', function(){
        return 'fornecedores';
    })->name('app.fornecedores');
    
    Route::get('/produtos', function(){
        return 'produtos';
    })->name('app.produtos');

});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


Route::fallback(function(){
   echo 'A rota acessada não existe!. <a href="' .route('site.index'). '">clique aqui para voltar para pagina inicial</a>';
    
});

//Route::redirect('/rota2', '/rota1');

