<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduit;

class CategoryController extends Controller
{
    //
    public function allCategories(){
        $categoriesPage = CategoryProduit::get();
        return view('categories.categoriesPage', compact('categoriesPage'));
    }


    public function search(){
        $q = request()->input('q');


        $categoryProduit = CategoryProduit::where('nomcategorie', 'like', "%$q%")
                                ->paginate(6);
                            

        return view('products.searchCategory')->with('categoryProduit', $categoryProduit);
    }
} 
 