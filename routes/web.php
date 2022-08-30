<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\FrontendController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontendController::class,'index']);
Route::get('tutorial/{category_slug}',[FrontendController::class,'viewcategoryPost']);
Route::get('tutorial/{category_slug}/{post_slug}',[FrontendController::class,'viewpost']);

//Comment System
Route::post('comments',[CommentController::class,'store']);
Route::get('delete-comment/{comment_id}',[CommentController::class,'destroy']);

Route::prefix('admin')->middleware(['auth','isadmin'])->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('/add-category',[CategoryController::class,'create']);
    Route::post('/category-store',[CategoryController::class,'store']);
    Route::get('/edit-category/{category_id}',[CategoryController::class,'edit']);
    Route::put('/update-category/{category_id}',[CategoryController::class,'update']);
    //Route::get('/delete-category/{category_id}',[CategoryController::class,'destroy']);
    Route::post('/delete-category',[CategoryController::class,'destroy']);

    // website settings
    Route::get('settings',[SettingController::class,'index']);
    Route::post('settings-store',[SettingController::class,'storedata']);

     
    
    // post 
    Route::get('/posts',[PostController::class,'index']);
    Route::get('/add-posts',[PostController::class,'create']);
    Route::post('/add-store',[PostController::class,'store']);
    Route::get('/posts/{post_id}',[PostController::class,'edit']);
    Route::put('/update-post/{post_id}',[PostController::class,'update']);
    Route::get('/delete-posts/{post_id}',[PostController::class,'destroy']);
    // user controller 
    Route::get('users',[UserController::class,'index']);  
    Route::get('users/{user_id}',[UserController::class,'edit']);
    Route::put('update-user/{user_id}',[UserController::class,'update']);
    



});

