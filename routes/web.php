<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\MultipleImageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BannerController;


use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\ContactController;


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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/reservation', [FrontController::class, 'reservation'])->name('front.reservation');
Route::post('reservation_process', [FrontController::class, 'reservation_process'])->name('reservation.reservation_process');
Route::get('gallery', [FrontController::class, 'gallery']);
Route::get('blog', [FrontController::class, 'blog']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');
Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('admin/category', [CategoryController::class, 'index']);
    Route::get('admin/category/manage_category', [CategoryController::class, 'manage_category']);
    Route::get('admin/category/manage_category/{id}', [CategoryController::class, 'manage_category']);
    Route::post('admin/category/manage_category_process', [CategoryController::class, 'manage_category_process'])->name('category.manage_category_process');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('admin/category/status/{status}/{id}', [CategoryController::class, 'status']);


    Route::get('admin/reservation', [ReservationController::class, 'index']);
    Route::get('admin/reservation/manage_reservation', [ReservationController::class, 'manage_reservation']);
    Route::get('admin/reservation/manage_reservation/{id}', [ReservationController::class, 'manage_reservation']);
    Route::post('admin/reservation/manage_reservation_process', [ReservationController::class, 'manage_reservation_process'])->name('reservation.manage_reservation_process');
    Route::get('admin/reservation/delete/{id}', [ReservationController::class, 'delete']);
    Route::get('admin/reservation/status/{status}/{id}', [ReservationController::class, 'status']);


    Route::get('admin/multipleimage', [MultipleImageController::class, 'index']);
    Route::get('admin/multipleimage/manage_multipleimage', [MultipleImageController::class, 'manage_multipleimage']);
    Route::get('admin/multipleimage/manage_multipleimage/{id}', [MultipleImageController::class, 'manage_multipleimage']);
    Route::post('admin/multipleimage/manage_multipleimage_process', [MultipleImageController::class, 'manage_multipleimage_process'])->name('multipleimage.manage_multipleimage_process');
    Route::get('admin/multipleimage/delete/{id}', [MultipleImageController::class, 'delete']);
    Route::get('admin/multipleimage/status/{status}/{id}', [MultipleImageController::class, 'status']);


    Route::get('admin/customer', [CustomerController::class, 'index']);
    Route::get('admin/customer/show/{id}', [CustomerController::class, 'show']);
    Route::get('admin/customer/status/{status}/{id}', [CustomerController::class, 'status']);



    Route::get('admin/banner', [BannerController::class, 'index']);
    Route::get('admin/banner/manage_banner', [BannerController::class, 'manage_banner']);
    Route::get('admin/banner/manage_banner/{id}', [BannerController::class, 'manage_banner']);
    Route::post('admin/banner/manage_banner_process', [BannerController::class, 'manage_banner_process'])->name('admin.banner.manage_banner_process');
    Route::get('admin/banner/delete/{id}', [BannerController::class, 'delete']);
    Route::get('admin/banner/status/{status}/{id}', [BannerController::class, 'status']);


});

