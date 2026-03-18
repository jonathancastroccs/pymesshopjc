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

    $this->products = new Product();    

    $findpost =  $this->products->getProductsBySearch($request->post);      


    if (!empty($request->post)) {



    }

    return response()->json(
      [
       'findpost' => $findpost        
     ]
   );

    

  }
}
