<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightlogsController;

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


Route::get('/weightLogId/creste', [WeightlogsController::class, 'create']);
Route::get('/weightLogId', [WeightlogsController::class, 'weightLogId']);
Route::post('/weightLogId/update', [WeightlogsController::class, 'update']);
Route::get('/', [WeightlogsController::class, 'weight_logs']);
