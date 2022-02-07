<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [AgentController::class, 'index'])->name('home');
Route::get('/view', [AgentController::class, 'show'])->name('view');


// Route::get('/view', function () {
//     return view('layouts/view');
// })->name('view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ->middleware(['auth'])

require __DIR__.'/auth.php';
