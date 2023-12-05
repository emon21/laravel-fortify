<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

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
//     return view('welcome');
// });

Route::get('/', function () {

     echo'<h2>Well Come To Laravel</h2>';

});

Route::get('test',[FrontendController::class,'index']);
