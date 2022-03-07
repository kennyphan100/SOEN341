<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('contact', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactFormController::class, 'store'])->name('contact.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Shopping cart view page
Route::post('/cart', [CartController::class, 'store'])->name('cart.store'); // Add item to shopping cart
Route::delete('/cart', [CartController::class, 'delete'])->name('cart.delete'); // Delete item from shopping cart
Route::patch('/cart', [CartController::class, 'update'])->name('cart.update'); // Update quantity from shopping cart

// Category routes
Route::get('/categories/{id}', [CategoriesController::class, 'show'])->name('categories.show');

Route::get('/categories/{id}/{sort_type}', [CategoriesController::class, 'show'])->name('categories.show_sort_by_price');

// User details routes
Route::get('/userProfile_info', [UserProfileController::class, 'show_info'])->name('userProfile.show_user_information');

Route::get('/userProfile_order', [UserProfileController::class, 'show_orders'])->name('userProfile.show_user_orders');

Route::get('/userProfile_payment', [UserProfileController::class, 'show_payments'])->name('userProfile.show_user_payments');

Route::get('/userProfile_admin', [UserProfileController::class, 'show_admin'])->name('userProfile.show_user_admin');

Route::get('/userProfile_admin_manage_products', [AdminController::class, 'show_all_products'])->name('userProfile.show_user_admin_products');

Route::get('/userProfile_admin_manage_categories', [AdminController::class, 'show_all_categories'])->name('userProfile.show_user_admin_categories');

Route::get('/userProfile_admin_add_category', [AdminController::class, 'show_add_category'])->name('userProfile.show_user_admin_add_category');

Route::get('/userProfile_admin_add_product', [AdminController::class, 'show_add_product'])->name('userProfile.show_user_admin_add_product');



Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/checkout', [OrderController::class, 'index'])->middleware(['auth'])->name('order.index'); //Checkout index
Route::post('/orderplaced', [OrderController::class, 'orderPlaced'])->name('order.orderPlaced'); //success on the order
