<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductCategoryController;

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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
})->name('home')->middleware('auth');

Route::get('/login', function () {
    if (Auth::user()) {
        return redirect()->route('home');
    }
    return view('login', []);
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/product/category', [ProductCategoryController::class, 'index'])
        ->name('product.category');
})->middleware('auth');
