<?php

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
// Start route login
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/logout', function () {
    return view('auth.login');
});
// End route logout

Route::prefix('/admin')->group(function (){
    Route::prefix('/categories')->group(function () {
        //Start route Product_category
        Route::get('/index', [App\Http\Controllers\Api\v1\CategoryProductController::class, 'index'])->name('indexCategory');
        Route::get('/show/{id}', [App\Http\Controllers\Api\v1\CategoryProductController::class, 'show'])->name('showCategory');
        Route::post('/update/{id}', [App\Http\Controllers\Api\v1\CategoryProductController::class, 'update'])->name('updateCategory');
        Route::get('/create', [App\Http\Controllers\Api\v1\CategoryProductController::class, 'create'])->name('createCategory');
        Route::post('/store', [App\Http\Controllers\Api\v1\CategoryProductController::class, 'store'])->name('storeCategory');
        //End route Product_category
    });
    Route::prefix('/products')->group(function () {
        //Start route products
        Route::get('/index', [App\Http\Controllers\Api\v1\ProductController::class, 'index'])->name('indexProduct');
        Route::get('/show/{id}', [App\Http\Controllers\Api\v1\ProductController::class, 'show'])->name('showProduct');
        Route::post('/update/{id}', [App\Http\Controllers\Api\v1\ProductController::class, 'update'])->name('updateProduct');
        Route::get('/create', [App\Http\Controllers\Api\v1\ProductController::class, 'create'])->name('createProduct');
        Route::post('/store', [App\Http\Controllers\Api\v1\ProductController::class, 'store'])->name('storeProduct');
        Route::get('/index1', [App\Http\Controllers\Api\v1\ProductController::class, 'search1'])->name('search1');
        Route::get('/index2', [App\Http\Controllers\Api\v1\ProductController::class, 'search2'])->name('search2');
        //End route products
    });

    Route::prefix('/brands')->group(function () {
        //Start route Brands
        Route::get('/index', [App\Http\Controllers\Api\v1\BrandController::class, 'index'])->name('indexBrand');
        Route::get('/show/{id}', [App\Http\Controllers\Api\v1\BrandController::class, 'show'])->name('showBrand');
        Route::post('/update/{id}', [App\Http\Controllers\Api\v1\BrandController::class, 'update'])->name('updateBrand');
        Route::get('/create', [App\Http\Controllers\Api\v1\BrandController::class, 'create'])->name('createBrand');
        Route::post('/store', [App\Http\Controllers\Api\v1\BrandController::class, 'store'])->name('storeBrand');
        //End route Brands
    });

    Route::prefix('/users')->group(function () {
        // Start route users
        Route::get('index', [App\Http\Controllers\Api\v1\UserController::class, 'index']);
        Route::get('show/{id}', [App\Http\Controllers\Api\v1\UserController::class, 'show'])->name('showUser');
        Route::post('update/{id}', [App\Http\Controllers\Api\v1\UserController::class, 'update'])->name('updateUser');
        // End route users
    });

    Route::prefix('/orders')->group(function () {
        // Start route orders
        Route::get('/index', [App\Http\Controllers\Api\v1\OrderController::class, 'index'])->name('indexOrder');
        Route::get('/show/{id}', [App\Http\Controllers\Api\v1\OrderController::class, 'show'])->name('showOrder');
        Route::post('/update/{id}', [App\Http\Controllers\Api\v1\OrderController::class, 'update'])->name('updateOrder');
        Route::get('/index4', [App\Http\Controllers\Api\v1\OrderController::class, 'search4'])->name('search4');
        // End route orders
    });

    Route::prefix('/orderdetails')->group(function () {
        // Start route orderdetails
        Route::get('/index', [App\Http\Controllers\Api\v1\OrderDetailController::class, 'index'])->name('indexOrderDetail');
        Route::get('/index5', [App\Http\Controllers\Api\v1\OrderDetailController::class, 'search5'])->name('search5');
        // End route orderdetails
    });

    Route::prefix('/comment_product')->group(function () {
        // Start route comment_product
        Route::get('/index', [App\Http\Controllers\Api\v1\CommentProductController::class, 'index'])->name('indexCommentProduct');
        Route::get('/index6', [App\Http\Controllers\Api\v1\CommentProductController::class, 'search6'])->name('search6');
        Route::get('/index7', [App\Http\Controllers\Api\v1\CommentProductController::class, 'search7'])->name('search7');
        // End route comment_product
    });

    Route::prefix('/blogs')->group(function () {
        //Start route Blogs
        Route::get('/index', [App\Http\Controllers\Api\v1\BlogController::class, 'index'])->name('indexBlog');
        Route::get('/show/{id}', [App\Http\Controllers\Api\v1\BlogController::class, 'show'])->name('showBlog');
        Route::post('/update/{id}', [App\Http\Controllers\Api\v1\BlogController::class, 'update'])->name('updateBlog');
        Route::get('/create', [App\Http\Controllers\Api\v1\BlogController::class, 'create'])->name('createBlog');
        Route::post('/store', [App\Http\Controllers\Api\v1\BlogController::class, 'store'])->name('storeBlog');
        //End route Blogs
    });

    Route::prefix('/comment_blog')->group(function () {
        // Start route comment_product
        Route::get('/index', [App\Http\Controllers\Api\v1\BlogCommentController::class, 'index'])->name('indexCommentBlog');
        Route::get('/index6', [App\Http\Controllers\Api\v1\BlogCommentController::class, 'search8'])->name('search8');
        Route::get('/index7', [App\Http\Controllers\Api\v1\BlogCommentController::class, 'search9'])->name('search9');
        // End route comment_product
    });

});
Route::get('/', function () {
    return view('user.index');
});
// Start resource
Route::prefix('v1')->group(function () {
    Route::resource('users', 'App\Http\Controllers\Api\v1\UserController');
    Route::resource('categories', 'App\Http\Controllers\Api\v1\CategoryProductController');
    Route::resource('brands', 'App\Http\Controllers\Api\v1\BrandController');
    Route::resource('products', 'App\Http\Controllers\Api\v1\ProductController');
    Route::resource('orders', 'App\Http\Controllers\Api\v1\OrderController');
    Route::resource('orderdetails', 'App\Http\Controllers\Api\v1\OrderDetailController');
    Route::resource('comment_products', 'App\Http\Controllers\Api\v1\CommentProductController');
    Route::resource('blogs', 'App\Http\Controllers\Api\v1\BlogController');
    Route::resource('comment_blogs', 'App\Http\Controllers\Api\v1\BlogCommentController');
});
// End resource
Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});
