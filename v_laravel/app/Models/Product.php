<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    // public $timestamps = false;  

    protected $fillable = [     
        'product_name',
        'product_img',
        'product_imggo',
        'product_imggt',
        'url_name',
        'product_content',        
        'maincategory_id',
        'type_id',
        'price',
        'unit',        
        'publish',
        'views'        
    ];

    public function getProducts()
    {
        return Product::select('products.id as productid','products.product_name','products.product_img','products.url_name','mc.id as maincategoryid','mc.maincategory_url','products.price')  
      ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')
      ->where('mc.id', 1)
      ->orWhere('mc.id', 2)
      ->orWhere('mc.id', 3)
      ->orWhere('mc.id', 6)
      ->orWhere('mc.id', 7)
      ->orderBy('products.id', 'desc')
      ->limit(18)
      ->get();
    }
}
