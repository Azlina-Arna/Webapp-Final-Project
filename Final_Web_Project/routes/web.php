<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get("detail/{id}",[HomeController::class, 'details']);
<<<<<<< Updated upstream
=======
Route::get("search",[HomeController::class, 'search']);
Route::post("add_to_cart",[HomeController::class, 'addToCart']);
>>>>>>> Stashed changes
