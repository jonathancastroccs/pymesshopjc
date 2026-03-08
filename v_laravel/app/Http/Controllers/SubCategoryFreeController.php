<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Post;
use App\Models\PostFree;
use App\Models\Backlink;
use App\Models\BacklinkOrder;
use App\Models\MainCategoryBacklink;
use App\Models\Product;


use Illuminate\Support\Facades\DB;


class SubCategoryFreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subcategory)
    {

    	$product = Product::select('products.id as productid','products.product_name','products.product_img','products.url_name','mc.id as maincategoryid','mc.maincategory_url','products.price')  
    	->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')
    	->where('mc.maincategory_url', $subcategory)
    	->orderBy('products.id', 'desc')     
    	->paginate(30);

    	$category2 = Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_name','mc.maincategory_url','mc.maincategory_icon')
    	->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
    	->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
    	->where('mc.subcategory_id', 1)
    	->get();



    	$mc_id = MainCategory::select('maincategorys.id','maincategorys.maincategory_url','maincategorys.maincategory_name')   
    	->where('maincategorys.maincategory_url', $subcategory) 
    	->firstOrFail();


    	return view('subcategorycom', [
    		'products' => $product,        
    		'maincategorys' => $mc_id->id,
    		'mmaincategorys' => $mc_id, 
    		'categorys2' => $category2          
    	]);
    }   


}
