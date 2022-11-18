<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduit extends Model
{
    use HasFactory;

    protected $table = "categoryproduit";
    protected $primaryKey = "idcategoryProduit";
    public $timestamps = false; 
}
   