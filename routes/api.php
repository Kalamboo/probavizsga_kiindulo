<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzakdogaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/szakdoga', [SzakdogaController::class, 'index']);
Route::get('/szakdoga/{id}', [SzakdogaController::class, 'show']);
Route::post('/szakdoga', [SzakdogaController::class, 'store']);
Route::delete('/szakdoga/{id}', [SzakdogaController::class, 'delete']);
Route::put('/szakdoga/{id}', [SzakdogaController::class, 'update']);