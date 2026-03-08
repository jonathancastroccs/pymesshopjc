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

    public function getProductsById($product_id_numb,$mc_id_numb,$maincategoryurl)
    {
        return Product::select('products.product_name','products.url_name','products.product_img','products.product_content','products.price','products.unit','t.type_name','mc.id as maincategoryid','products.id as productid','products.product_imggo','products.product_imggt','t.type_color','products.instagram_url','products.mlibre_url')   
        ->join('users_products as up', 'up.product_id', '=', 'products.id')
        ->join('users as u', 'u.id', '=', 'up.user_id')    
        ->join('types as t', 't.id', '=', 'products.type_id')   
        ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')   
        ->where('products.id', $product_id_numb)    
        ->where('products.maincategory_id', $mc_id_numb)
        ->where('mc.maincategory_url', $maincategoryurl)   
        ->where('products.publish', null)    
        ->firstOrFail();
    }

     public function getProductsByCategorys($subcategory)
    {
        return Product::select('products.id as productid','products.product_name','products.product_img','products.url_name','mc.id as maincategoryid','mc.maincategory_url','products.price')  
        ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')
        ->where('mc.maincategory_url', $subcategory)
        ->orderBy('products.id', 'desc')     
        ->paginate(30);
    }
}
