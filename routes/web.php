<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController, ServicoController};
use Illuminate\Support\Facades\Auth;

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
Route::get('/candidato', [PostController::class, 'candidato'])->name('candidato');
Route::get('/avaliacao', [PostController::class, 'avaliacao'])->name('avaliacao');
Route::post('create', [PostController::class, 'salvarCandidato'])->name('candidato.create');
Route::get('area', [PostController::class, 'area'])->name('area');
/*

Route::get('services', [PostController::class, 'area'])->name('candidato.area');
Route::post('services', [ServicoController::class, 'store'])->name('post.store');
Route::get('services/{id}', [ServicoController::class, 'show'])->name('post.show');
Route::get('/avaliacao ', [PostController::class, 'avaliacao'])->name('avaliacao');
Route::get('post/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');

Route::get('user', [PostController::class, 'user'])->name('post.user');
Route::get('dash', [PostController::class, 'dash'])->name('post.dash');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


require __DIR__.'/auth.php';
