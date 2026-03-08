<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Product;


class SubCategoryFreeController extends Controller
{

  protected $categorys;
  protected $mainCategorys;


  public function __construct(Category $categorys, MainCategory $mainCategorys){ 

    $this->categorys = $categorys;
    $this->mainCategorys = $mainCategorys;
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subcategory)
    { 
        $this->products = new Product();         

        $product =  $this->products->getProductsByCategorys($subcategory);    	

        $category2 =  $this->categorys->getCategorys();

        $mc_id = $this->mainCategorys->getMainCategorysById($subcategory);      


        return view('subcategorycom', [
          'products' => $product,        
          'maincategorys' => $mc_id->id,
          'mmaincategorys' => $mc_id, 
          'categorys2' => $category2          
      ]);
    }   


}
