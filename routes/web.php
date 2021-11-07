<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileUploadController;
use App\Http\Controllers\Backend\Products\ProductCategoryController;
use App\Http\Controllers\Backend\Products\ProductController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('upload-ui', [FileUploadController::class, 'dropzoneUi']);
// Route::post('file-upload', [FileUploadController::class, 'dropzoneFileUpload'])->name('dropzoneFileUpload');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin:admin']], function () {
    Route::get('/', [AdminController::class, 'loginForm']);
    Route::post('/', [AdminController::class, 'store'])->name('login');
});
Route::post('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout')->middleware('auth:admin');
Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth:web');

// Route::middleware(['auth.admin:admin', 'verified'])->get('/admin/dashboard', function () {
//     return view('ad');
// })->name('admin.dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth.admin:admin']], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', [ProductCategoryController::class, 'index'])->name('index');
            Route::get('/create', [ProductCategoryController::class, 'create'])->name('create');
            Route::post('/store', [ProductCategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ProductCategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ProductCategoryController::class, 'update'])->name('update');
            Route::get('/destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('destroy');
            Route::get('/updateStatus', [ProductCategoryController::class, 'updateStatus'])->name('updateStatus');

        });
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/store', [ProductController::class, 'store'])->name('store');
            Route::get('/edit', [ProductController::class, 'edit'])->name('edit');
            Route::post('/update', [ProductController::class, 'update'])->name('update');
            Route::get('/destroy', [ProductController::class, 'destroy'])->name('destroy');
        });
    });
});
