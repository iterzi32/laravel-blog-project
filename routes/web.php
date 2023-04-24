<?php
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Backend\Article\ArticleCTRL;
use App\Http\Controllers\Backend\Category\CategoryCTRL;
use App\Http\Controllers\Backend\Contact\ContactCTRL;
use App\Http\Controllers\Backend\Page\PageCTRL;
use App\Http\Controllers\Frontend\Article\ArticleController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Category\CategoryController;
use App\Http\Controllers\Frontend\Page\PageController;
use Illuminate\Support\Facades\Route;

/*-------------------------------Admin---------------------------------------------------*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('login', 'admin.auth.login')->name('login');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::view('index', 'backend.index')->name('index');
        Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
    });
});

/*-------------------------------Admin Article Management--------------------------------*/
Route::prefix('admin/dashboard')->group(function () {
    Route::get('article/trashed', [ArticleCTRL::class, 'trashed'])->name('article.trashed');
    Route::get('article/recover/{id}', [ArticleCTRL::class, 'recover'])->name('article.recover');
    Route::get('article/delete/{id}', [ArticleCTRL::class, 'delete'])->name('article.delete');
    Route::resource('article', ArticleCTRL::class);
});

/*-------------------------------Admin Category Management-------------------------------*/
Route::prefix('admin/dashboard')->group(function () {
    Route::get('category/trashed', [CategoryCTRL::class, 'trashed'])->name('category.trashed');
    Route::get('category/recover/{id}', [CategoryCTRL::class, 'recover'])->name('category.recover');
    Route::get('category/delete/{id}', [CategoryCTRL::class, 'delete'])->name('category.delete');
    Route::resource('category', CategoryCTRL::class);
});

/*-------------------------------Admin Page Management-------------------------------*/
Route::prefix('admin/dashboard')->group(function () {
    Route::get('page/trashed', [PageCTRL::class, 'trashed'])->name('page.trashed');
    Route::get('page/recover/{id}', [PageCTRL::class, 'recover'])->name('page.recover');
    Route::get('page/delete/{id}', [PageCTRL::class, 'delete'])->name('page.delete');
    Route::resource('page', PageCTRL::class);
});

/*-------------------------------Admin Message Management-------------------------------*/
Route::prefix('admin/dashboard')->group(function () {
    Route::get('message/index', [ContactCTRL::class, 'index'])->name('message.index');
    Route::get('message/destroy/{id}', [ContactCTRL::class, 'destroy'])->name('message.destroy');
    Route::get('message/trashed', [ContactCTRL::class, 'trashed'])->name('message.trashed');
    Route::get('message/recover/{id}', [ContactCTRL::class, 'recover'])->name('message.recover');
    Route::get('message/delete/{id}', [ContactCTRL::class, 'delete'])->name('message.delete');
});

/*-------------------------------Blog----------------------------------------------------*/
Route::prefix('')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('frontend.index');
});

/*-------------------------------Article-------------------------------------------------*/
Route::prefix('article')->group(function () {
    Route::get('{categorySlug}/{articleSSlug}', [ArticleController::class, 'show'])->name('article.show');
});

/*-------------------------------Category------------------------------------------------*/
Route::prefix('category')->group(function () {
    Route::get('{categorySlug}', [CategoryController::class, 'show'])->name('category.show');
});

/*-------------------------------Page----------------------------------------------------*/
Route::prefix('page')->group(function () {
    Route::get('{slug}', [PageController::class, 'show'])->name('page.show');
});

/*-------------------------------Contact-------------------------------------------------*/
Route::prefix('contact')->group(function () {
    Route::get('index', [ContactController::class, 'index'])->name('contact.index');
    Route::post('', [ContactController::class, 'store'])->name('contact.store');
});
