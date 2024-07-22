<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ShoppingCartController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //orders
    // Route::prefix('orders')->group(function () {
    //     Route::resource('/', OrderController::class)
    //         ->only(['create', 'store'])
    //         ->names([
    //             'create' => 'orders.create',
    //             'store' => 'orders.store',
    //         ]);
    // });
});

require __DIR__.'/auth.php';
$idRegex = '[0-9]+';
$slugRegex = '[a-z0-9-]+';
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/{slug}',[ProductController::class,'show'])->name('product.show')->where([
    'slug' => $slugRegex,
    'product'=> $idRegex

]);
Route::get('/shoppingCart',ShoppingCartController::class)->name('shopping.index');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,


    ]);
    });
