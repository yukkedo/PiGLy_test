<?php

use App\Http\Controllers\WeightManegementController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::middleware('auth')->group(function() {
    Route::get('/weight_logs', [WeightManegementController::class, 'index']);
    Route::get('/register/step2', [WeightManegementController::class, 'showStep2']);
    Route::post('/register/step2', [WeightManegementController::class, 'postStep2']);

});

Route::post('/register/step1', [WeightManegementController::class, 'postStep1']);
Route::get('/weight_logs/goal_setting', [WeightManegementController::class, 'showWeight']);
Route::post('/weight_logs/goal_setting', [WeightManegementController::class, 'store']);
