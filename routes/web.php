<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmincustomerController;
use App\Http\Controllers\AdminproductController;
use App\Http\Controllers\AdminorderController;


use Illuminate\Support\Facades\Session;

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

Route::get("/login", function () {
    return view('login');
});

Route::get("/logout", function () {
    Session::forget('customer');
    Session::forget('admin');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/register",[CustomerController::class,'register']);
Route::post("/login",[CustomerController::class,'login']);
Route::get("/",[ProductController::class,'userindex']);

Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("cartlist",[ProductController::class,'cartlist']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);





// Dropdown 

Route::get("/bracelet",[ProductController::class,'showBracelet']);
Route::get("/necklace",[ProductController::class,'showNecklace']);
Route::get("/ring",[ProductController::class,'showRing']);
Route::get("/other",[ProductController::class,'showOther']);













// Admin page 

Route::get('/admin', function () {
    return view('admin.login');
});

// Route::get('/admin/login', function () {
//     return view('admin.login');
// });

Route::post("/admin" , [CustomerController::class , 'login']);


Route::get('/admin/main', function () {
    return view('admin.main');
});

// Route::get('/admin/product', function () {
//     return view('admin.product');
// });

// Route::get("/admin/product" , [AdminController::class , 'index_product']);
// Route::post("/admin/create" , [AdminController::class , 'store_product']);
// Route::get("/admin/create" , [AdminController::class , 'create_product']);
// Route::get("/admin/show/{id}" , [AdminController::class , 'show_product']);


Route::resource('admin/products', ProductController::class);
Route::resource('admin/customers',CustomerController::class);
Route::resource('admin/orders', AdminorderController::class);

Route::get("allProduct",[ProductController::class,'allproduct']);

// Route::get("admin/main/logout", function () {
//     Session::forget('admin');
//     return redirect('admin');
// });