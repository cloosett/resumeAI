<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/language/{locale}', function ($locale){
    return redirect("/en/");
})->name('testing');

Route::localized(function () {
    Route::get('removebackground', [App\Http\Controllers\RemoveBackgroundController::class, 'index'])->name('removebg');

    Route::post('remove-background', [App\Http\Controllers\RemoveBackgroundController::class, 'removeBackground'])->name('removebackground');
    Route::get('examples', function () {
        return view('examples');
    })->name('examples');


    Route::get('blog', function () {
        return view('blog');
    })->name('blog');

    Route::get('download', [App\Http\Controllers\PdfController::class, 'download'])->name('download');

    Route::get('/', function () {
        return view('home');
    })->name('home');


    Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');
});



Route::post('/submit-resume', [App\Http\Controllers\ResumeController::class, 'submitResume'])->name('submit-resume');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/main', [App\Http\Controllers\MainController::class, 'main'])->name('main');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', function () {
        return view('create');
    })->name('create');
});

require __DIR__.'/auth.php';
