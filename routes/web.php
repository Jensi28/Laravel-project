<?php
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;

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




Route::get('about-us',function() {
    return ('Welcome to Parul university');
});
Route::get('our-product', function(){
    return view('product');
});
Route::get('our-services', [SiteController::class,'services']);

// sending parameter to controller
Route::get('get-service-param/{id}',[SiteController::class ,'serviceProvider']);
Route::get('about-us', [SiteController::class,'about']);
Route::get('/', [SiteController::class,'index']);
Route::get('contact', [SiteController::class,'contact']);
Route::get('login', [SiteController::class,'login']);
Route::get('registration', [SiteController::class,'registration']);

Route::post('/contact-save',[SiteController::class,'contactsave']);
Route::post('send-email',[SiteController::class,'sendEmail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('task-create',[TaskController::class,'index']);
Route::post('task-save',[TaskController::class,'create']);


Route::get('task-read',[TaskController::class,'show']);
Route::get('/task-edit/{id}',[TaskController::class,'edit']);
Route::post('/task-edit-save/{id}',[TaskController::class,'update']);


Route::get('/task-delete/{id}',[TaskController::class,'destroy']);


