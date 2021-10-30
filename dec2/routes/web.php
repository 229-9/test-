<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaiwaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now ccreate something great!
|
*/
Route::resource('kaiwa', KaiwaController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/cat', [KaiwaController::class, 'cat']);

Route::get('/nagomu', function () {
    return view('nagomu');
});

Route::get('/seken', function () {
    return view('seken');
});

Route::get('/warai', function () {
    return view('warai');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
