<?php

use App\Http\Controllers\CandidatController;
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

    // Route::get('/', function () {
    //     return view('index');
    // });
Route::get('/Vote', function () {
    return view('notif');
})->name('notif');
Route::resource('/', CandidatController::class);
Route::get('/brillance@dmin', [CandidatController::class, 'getCandidats']);
Route::get('/voter/{code}', [CandidatController::class, 'addVote'])->name('voter');
Route::resource('/', CandidatController::class);

