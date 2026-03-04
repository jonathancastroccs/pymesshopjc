<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {

      $product = Product::select('products.id as productid','products.product_name','products.product_img','products.url_name','mc.id as maincategoryid','mc.maincategory_url','products.price')  
      ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')
      ->where('mc.id', 1)
      ->orWhere('mc.id', 2)
      ->orWhere('mc.id', 3)
      ->orWhere('mc.id', 6)
      ->orWhere('mc.id', 7)
      ->orderBy('products.id', 'desc')
      ->limit(18)
      ->get();


      $category2 = Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_name','mc.maincategory_url','mc.maincategory_icon')
      ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
      ->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
      ->where('mc.subcategory_id', 1)
      ->get();

      return view('home', [          
        'products' => $product,
        'categorys2' => $category2     
    ]);


  }
}
