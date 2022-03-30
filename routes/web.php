<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AizUploadController;

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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('post/{id}', [FrontController::class, 'post'])->name('front.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('comment', CommentController::class);




Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);

Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);

Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);

Route::delete('/aiz-uploader/destroy/{id}', [AizUploadController::class, 'destroy']);

Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);

Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');

