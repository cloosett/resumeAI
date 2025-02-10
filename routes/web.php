<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;
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
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', function (){
        return view('admin.home');
    })->name('dashboard');

    Route::get('blog', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog');

    Route::get('blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blogcreate');
    Route::post('blog/create', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blogstore');

    Route::get('blog/tags', [App\Http\Controllers\Admin\BlogController::class, 'tagsIndex'])->name('admin.tags');
    Route::post('blog/tags/create', [App\Http\Controllers\Admin\BlogController::class, 'tagsStore'])->name('admin.tagsstore');

    Route::get('blog/edit/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('admin.blogedit');
    Route::post('blog/edit/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blogupdate');

    Route::delete('blog/delete/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blogdelete');



    Route::get('role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.role');
    Route::get('role/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('admin.rolecreate');
    Route::post('role/create', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('admin.rolestore');

    Route::get('role/edit/{role}', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('admin.roleedit');
    Route::post('role/edit/{role}', [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('admin.roleupdate');

    Route::delete('role/delete/{role}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('admin.roledelete');



    Route::get('authors', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('admin.author');

    Route::get('authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('admin.authorcreate');
    Route::post('authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('admin.authorstore');

    Route::get('authors/edit/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'edit'])->name('admin.authoredit');
    Route::post('authors/edit/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'update'])->name('admin.authorupdate');

    Route::delete('authors/delete/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'destroy'])->name('admin.authordelete');

    Route::post('comments/{id}', [App\Http\Controllers\Admin\BlogController::class, 'updateCommentStatus'])->name('comments.updateStatus');

});

Route::get('/language/{locale}', function ($locale){
    return redirect("/en/");
})->name('testing');

Route::middleware('auth')->group(function () {
    Route::get('2fa/enable', [TwoFactorController::class, 'enableTwoFactor'])->name('2fa.enable');
    Route::get('2fa/confirm', [TwoFactorController::class, 'confirmTwoFactor'])->name('2fa.confirm');
    Route::post('2fa/verify', [TwoFactorController::class, 'verifyTwoFactor'])->name('2fa.verify');
});

Route::localized(function () {
    Route::get('removebackground', [App\Http\Controllers\RemoveBackgroundController::class, 'index'])->name('removebg');

    Route::post('remove-background', [App\Http\Controllers\RemoveBackgroundController::class, 'removeBackground'])->name('removebackground');
    Route::get('examples', function () {
        return view('examples');
    })->name('examples');


    Route::get('blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogshow');
    Route::post('blog/comment', [App\Http\Controllers\BlogController::class, 'storeComment'])->name('blogcomment');


    Route::get('download', [App\Http\Controllers\PdfController::class, 'download'])->name('download');

    Route::get('/', function () {
        return view('home');
    })->name('home');


    Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');
});



Route::post('/submit-resume', [App\Http\Controllers\ResumeController::class, 'submitResume'])->name('submit-resume');


Route::middleware('auth', '2fa')->group(function () {
    Route::get('/main', [App\Http\Controllers\MainController::class, 'main'])->name('main');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', function () {
        return view('create');
    })->name('create');
});


require __DIR__.'/auth.php';
