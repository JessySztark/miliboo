<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

//Route::get('posts', function () {
  //  return response() -> json([
    //    'title' => 'Mon super title',
      //  'description' => 'efion'
   // ]);
//});

//Route::get('articles', function(){
  //  return view('view');
//});

Route::get('categorie', [CategoryController::class, "allCategories"])->name('categoriesPage');
Route::get('searchCategory', [CategoryController::class, "search"])->name('products.searchCategory');


Route::get('produits', [ProduitComposeController::class, "allProducts"])->name('produits');
Route::get('searchProduit', [ProduitComposeController::class, "search"])->name('products.searchProducts');



