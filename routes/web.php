<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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



Route::get('download', [App\Http\Controllers\PdfController::class, 'download'])->name('download');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');


Route::get('/main', [App\Http\Controllers\MainController::class, 'main'])->name('main');
Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');

Route::post('/submit-resume', [App\Http\Controllers\ResumeController::class, 'submitResume'])->name('submit-resume');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/main', [App\Http\Controllers\MainController::class, 'main'])->name('main');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
