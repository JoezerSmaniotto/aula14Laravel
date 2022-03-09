<?php
use App\Http\Controllers\PetController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

// Route::get('/ola', function () {
//     //return "<h1>Olá Mundo <h1/>";
//    // ou
//    echo  "<h1>Olá Mundo Com Laravel<h1/>";
// });

// Chamando um controller
         // Rota  //1ºReferencia a classe COntroller, 2ºManda para o metodo index criado no Controller
Route::get('/ola', [HomeController::class, 'index']);        //Nomeia rotas
Route::get('/produtos', [ProdutoController::class, 'index'])->name('index');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('show');
// crete
Route::get('/produto', [ProdutoController::class, 'create']);
Route::post('/produto', [ProdutoController::class, 'store']);
//


// USUARIOS -----------------------------
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);
// crete
Route::get('/usuario', [UsuarioController::class, 'create']);
Route::post('/usuario', [UsuarioController::class, 'store']);

// PETS----------------------------------
Route::get('/pets', [PetController::class, 'index']);
Route::get('/pet/{id}', [PetController::class, 'show']);
// crete
Route::get('/pet', [PetController::class, 'create']);
Route::post('/pet', [PetController::class, 'store']);

