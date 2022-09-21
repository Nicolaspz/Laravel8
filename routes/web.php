<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController, ServicoController};


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
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/somos', [PostController::class, 'somos'])->name('post.somos');
Route::get('services', [ServicoController::class, 'listar'])->name('post.listar');
Route::post('services', [ServicoController::class, 'store'])->name('post.store');
Route::get('services/{id}', [ServicoController::class, 'show'])->name('post.show');
Route::delete('services/{id} ', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('post/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');

Route::get('user', [PostController::class, 'user'])->name('post.user');
Route::get('dash', [PostController::class, 'dash'])->name('post.dash');


/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
 */