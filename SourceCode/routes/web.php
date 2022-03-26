<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\ManageController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
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


//home page
Route::get('/',[HomeController::class,'index']);
//categories
Route::get('/all-categories',[HomeController::class,'all_category']);

//category
Route::get('/category/{slug}/{id}',[HomeController::class,'category']);

//detail page
Route::get('/detail/{slug}/{id}',[HomeController::class,'detail']);
//comment
Route::post('/save-comment/{slug}/{id}',[HomeController::class,'save_comment']);
//delete comment
Route::get('admin/comment/delete/{id}',[AdminController::class,'delete_comment']);




//land page
Route::get('/land',[LandController::class,'index']);
Route::get('/land-post',[LandController::class,'index']);
//club detail
Route::get('/club-detail/{slug}/{id}',[LandController::class,'club_detail']);
//provider detail
Route::get('/provider-detail/{slug}/{id}',[LandController::class,'provider_detail']);
//post detail
Route::get('/post-detail/{slug}/{id}',[LandController::class,'post_detail']);
// land comment
Route::post('/save-comment/{slug}/{id}',[LandController::class,'save_comment']);
//cat side bar
Route::get('/all-categories',[LandController::class,'all_category']);
Route::get('/category/{slug}/{id}',[LandController::class,'category']);


//contact
Route::post('/land',[LandController::class,'contact']);
// all clubs
Route::get('/all-club',[LandController::class,'clubs']);
// all providers
Route::get('/all-provider',[LandController::class,'providers']);




//admin
//users
Route::get('admin/user',[AdminController::class,'users']);
Route::get('admin/user/delete/{id}',[AdminController::class,'delete_user']);
//admins
Route::get('admin',[AdminController::class,'admins']);

//comment
Route::get('/comment',[AdminController::class,'comments']);
//login
Route::get('/admin/login',[AdminController::class,'login']);
//logout
Route::get('/admin/logout',[AdminController::class,'logout']);
//submit_login
Route::post('/admin/login',[AdminController::class,'submit_login']);
//dashboard
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
// Categories
Route::get('admin/category/{id}/delete',[CategoryController::class,'destroy']);
Route::resource('admin/category',CategoryController::class);
//posts
Route::resource('post',PostController::class);
//delete posts
Route::get('post/{id}/delete',[PostController::class,'destroy']);
//setting
Route::get('admin/setting',[SettingController::class,'index']);
//save setting
Route::post('admin/setting',[SettingController::class,'save_settings']);
//contact
Route::get('admin/contact',[AdminController::class,'contact']);


//manage posts for users

Route::resource('manage',ManageController::class);
Route::get('manage/{id}/delete',[ManageController::class,'destroy']);
Route::get('manage',[ManageController::class,'save_post_form']);
Route::post('manage',[ManageController::class,'save_post_data']);
Route::get('manage',[ManageController::class,'manage_posts']);

//club
Route::resource('admin/club',ClubController::class);
Route::get('admin/club/{id}/delete',[ClubController::class,'destroy']);
//providers
Route::resource('admin/provider',ProviderController::class);
Route::get('admin/provider/{id}/delete',[ProviderController::class,'destroy']);

//auth

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

