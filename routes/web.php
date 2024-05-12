<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
    
// });
use App\Http\Controllers\ResepController;


 
Route::get('/', function () { return view('dashboard');   });

Route::get('/home', [ResepController::class, 'index']);

Route::get('/create', [ResepController::class, 'indexAdd'])->name('create');


Route::post('/tambahResep', [ResepController::class, 'addResep']);

Route::delete('/deleteResep/{id}', [ResepController::class, 'deleteResep']);



// Route::get('/', function () {
//     return view('welcome');

// });
