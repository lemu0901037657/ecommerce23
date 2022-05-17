<?php
use App\Models\catagory;
use App\Models\products;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productsController;
use App\Http\controllers\CatagoryController;
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
    return view('welcome');
});
Route::get('/catagory/register',[CatagoryController::class,'register'])->name('catagory/register');
Route::post('/catagory/register',[CatagoryController::class,'store']);
Route::get('/catagory/list', [CatagoryController::class, 'get_all'])->name('catagory/list');
Route::get('/catagory/edit/{id}', [CatagoryController::class, 'edit']);
Route::post('/catagory/update',[CatagoryController::class,'update'])->name('catagory/update')->name('catagory/update');
Route::get('/catagory/delete/{id}', [CatagoryController::class, 'delete']);
Route::get('/catagory/search/{id}', [CatagoryController::class, 'search'])->name('catagory/search');
Route::get('/products/list', [productsController::class, 'get_all'])->name('products/list');
Route::get('/products/edit/{id}', [productsController::class, 'edit']);
Route::post('/products/update',[productsController::class,'update'])->name('products/update');
Route::get('/products/delete/{id}', [productsController::class, 'delete']);
Route::get('/products/search/{id}', [productsController::class, 'search'])->name('products/search');
Route::get('/products/register',[productsController::class,'register'])->name('products/register');
Route::post('/products/register',[productsController::class,'store']);

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
