<?php
use App\Http\Controllers\ListesController;
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

Route::get('/', [ListesController::class, 'welcome' ]);

Route::POST('/presence', [ListesController::class, 'presence']);

Route::get('/liste', [ListesController::class, 'liste']);

Route::get('/Token', [ListesController::class, 'Token']);



