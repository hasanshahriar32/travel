<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\destinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pagecontroller;
use GuzzleHttp\Middleware;
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

Route::get('/', [pagecontroller::class, 'index'])->name('index');
Route::get('/about', [pagecontroller::class, 'about'])->name('about');
Route::get('/contact', [pagecontroller::class, 'contact'])->name('contact');
Route::get('/destination_details/{id}', [pagecontroller::class, 'destination_details'])->name('destination_details');
Route::get('/travel_destination', [pagecontroller::class, 'travel_destination'])->name('travel_destination');





//Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
//Route::get('/home', [HomeController::class, 'home'])->name('home');

route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authinticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

        //catagories
        Route::get('/catagory/create', [CatagoryController::class, 'create'])->name('catagory.create');
        Route::get('/catagories', [CatagoryController::class, 'index'])->name('catagory.catagories');
        Route::post('/catagories', [CatagoryController::class, 'store'])->name('category.store');
        Route::get('/catagory/edit/{id}', [CatagoryController::class, 'edit'])->name('catagory.edit');
        Route::post('/catagory/{id}', [CatagoryController::class, 'update'])->name('catagory.update');
        Route::post('/catagory/delete/{id}', [CatagoryController::class, 'destroy'])->name('catagory.delete');


        //destination
        Route::get('/destination/create', [destinationController::class, 'create'])->name('destination.create');
        Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
        Route::post('/destination', [DestinationController::class, 'store'])->name('destination.store');
        Route::get('/destination/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
        Route::post('/destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
        Route::post('/destination/delete/{id}', [DestinationController::class, 'destroy'])->name('destination.delete');




    });
    Route::group(['middleware' => 'admin.auth'], function () {
        //Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');

    });
});
