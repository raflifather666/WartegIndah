<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,"index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);
Route::get('/users', [AdminController::class,"users"])->name('users');
Route::get('/deleteusers/{id}', [AdminController::class, "deleteusers"]);
Route::get('/editusersview/{id}', [AdminController::class, "editusersview"]);
Route::post('/editusers/{id}', [AdminController::class, "editusers"]);
Route::get('/menumakanan',[AdminController::class,"menumakanan"]);
Route::get('/tambahmakanan',[AdminController::class,"tambahmakanan"]);
Route::post('/uploadmakanan',[AdminController::class,"uploadmakanan"]);
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
Route::get('/editmakanan/{id}',[AdminController::class,"editmakanan"]);
Route::post('/edit/{id}',[AdminController::class,"edit"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
