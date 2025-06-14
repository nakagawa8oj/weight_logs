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


Route::get('/', [WeightlogsController::class, 'weight_logs']);
Route::get('/weightLogId/create', [WeightlogsController::class, 'weightLogId']);
Route::post('/weightLogId/creste', [WeightlogsController::class, 'create']);
Route::get('/weightLogId/update', [WeightlogsController::class, 'update']);
Route::post('/weightLogId/update', [AuthorController::class, 'renewal']);