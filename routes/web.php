<?php




use Illuminate\Support\Facades\Route;

// controller

use  App\Http\Controllers\Guest\PageController;
use  App\Http\Controllers\Guest\IdController;



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

Route::get('/',[PageController::class,'index'])->name('index');

route::get('/{id}',[IdController::class,'id'])->name('index.id');
