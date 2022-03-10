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
// Crete
Route::get('/produto', [ProdutoController::class, 'create']);
Route::post('/produto', [ProdutoController::class, 'store']);
// Update
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('edit');
Route::post('/produto/{id}/update', [ProdutoController::class, 'update'])->name('update');
// Delete
Route::get('/produto/{id}/delete', [ProdutoController::class, 'delete'])->name('delete');
Route::post('/produto/{id}/remove', [ProdutoController::class, 'remove'])->name('removeProduto');



// USUARIOS -----------------------------
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);
// Crete
Route::get('/usuario', [UsuarioController::class, 'create'])->name('createUser');
Route::post('/usuario', [UsuarioController::class, 'store']);
// Update
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('editUser');
Route::post('/usuario/{id}/update', [UsuarioController::class, 'update'])->name('updateUser');
// Delete
Route::get('/usuario/{id}/delete', [UsuarioController::class, 'delete'])->name('deleteUser');
Route::post('/usuario/{id}/remove', [UsuarioController::class, 'remove'])->name('removeUser');

// PETS----------------------------------
Route::get('/pets', [PetController::class, 'index']);
Route::get('/pet/{id}', [PetController::class, 'show']);
// Crete
Route::get('/pet', [PetController::class, 'create'])->name('createPet');
Route::post('/pet', [PetController::class, 'store']);
// Update
Route::get('/pet/{id}/edit', [PetController::class, 'edit'])->name('editPet');
Route::post('/pet/{id}/update', [PetController::class, 'update'])->name('updatePet');
// Delete
Route::get('/pet/{id}/delete', [PetController::class, 'delete'])->name('deletePet');
Route::post('/pet/{id}/remove', [PetController::class, 'remove'])->name('removePet');
