<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

  protected $categorys;

  // protected $userService;

  public function __construct(Category $categorys){
    // $this->categorys = new Category();

    $this->categorys = $categorys;
  }

  public function index(Product $products)
  {     

    $product =  $products->getProducts();


    $category2 =  $this->categorys->getCategorys();

    return view('home', [          
      'products' => $product,
      'categorys2' => $category2     
    ]);


  }

  public function findPost(Request $request)
  { 

    $findpost = Product::select('products.id as productid','products.product_name','products.product_img','products.url_name','mc.id as maincategoryid','mc.maincategory_url','products.price','products.created_at','products.updated_at')  
    ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')
    ->where('products.product_name','like','%'.$request->post.'%')    
    ->orderBy('products.id', 'desc')
    ->limit(10)   
    ->get();    


    if (!empty($request->post)) {

      

    }

    return response()->json(
      [
       'findpost' => $findpost        
     ]
   );

    

  }
}
