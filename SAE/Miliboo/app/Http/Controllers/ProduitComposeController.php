<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProduitCompose;

class ProduitComposeController extends Controller
{
    //
    public function allProducts(){
        $categoriesPage = ProduitCompose::get();
        return view('produits.ProduitPage', compact('categoriesPage'));
    }
}
 