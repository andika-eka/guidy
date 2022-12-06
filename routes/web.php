<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;

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
//authentication routes
Route::get('/signup', [AuthController::class, 'signUpPage']);
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);



Route::get('/index', [PageController::class, 'landingPage']);
Route::get('/galery/{id}', [PageController::class, 'ProfilePage']);

Route::resource('Review', ReviewController::class, [
    'except' => [ 'index' ]
]);

Route::get('/{guide_id}/review', [ReviewController::class, 'index']);
