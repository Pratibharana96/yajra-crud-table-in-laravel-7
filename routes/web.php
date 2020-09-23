<?php
use App\Http\Controllers\SendMailController;

use Illuminate\Support\Facades\Route;

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
Route::get('/', [SendMailController::class, 'index']);
Route::get('/event', [SendMailController::class, 'event']);
Route::post('/send', [SendMailController::class, 'send'])->name('SendMail');
