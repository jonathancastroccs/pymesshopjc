<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
// use App\Models\Post;
use App\Models\Product;
use App\Models\UserPost;
use App\Models\UserProduct;
use App\Models\UserCalification;
use App\Models\Calification;
use App\Models\Type;
use App\Models\Site;
use App\Models\Comition;
use App\Models\Payment;
use App\Models\Revition;

// use App\Models\Product;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subcategory, $id)
    {

      
      $types = Type::select('types.id','types.type_name')        
      ->get();

      // $sites = Site::select('sites.id','sites.site')        
      // ->get();

      // $comitions = Comition::select('comitions.id','comitions.comition_name')        
      // ->get();

      // $payments = Payment::select('payments.id','payments.payment_name')        
      // ->get();

      // $revitions = Revition::select('revitions.id','revitions.revition')        
      // ->get();

      $subid = MainCategory::select('maincategorys.subcategory_id')
      ->where('maincategorys.id', $id)        
      ->first();

      // dd($subid);
      // exit;





      return view('user.product', [
        'categoryid' => $id,
        'types' => $types,
        // 'sites' => $sites,
        // 'comitions' => $comitions,
        // 'payments' => $payments,
        // 'revitions' => $revitions,
        'subid' =>  $subid
      ]);
    }

    public function checkout($id)
    {

     $email = Auth::user()->email;

     $product_all = DB::table('products as p')
     ->leftJoin('prices as pr', 'pr.id', '=', 'p.price_id')
     ->where('p.id', $id)        
     // ->get();
     ->first();

     // print_r($product_all);

     // exit;

     return view('products.checkout', [
        // 'products' => $users,
      'products_sell' => $product_all
    ]);

      // return view('products.checkout')->with(['products_sell'=>$product_all]);
   }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $user_id = Auth::user()->id;


      $request->validate([
        'product_name' => ['required', 'max:120'],
        'price' => ['required'],
        'product_content' => ['required', 'max:1500'],              
      ]);

    
      $searchString = " ";

      $searchStringCara = "";

      $searchStringCaraFinal = "-";

      $cara1 = ",";

      $cara2 = ".";

      $cara3 = "/";

      $cara4 = "+";

      $cara5 = "#";

      $cara6 = "$";

      $cara7 = "%";

      $cara8 = "&";

      $cara9 = "(";

      $cara10 = ")";

      $cara11 = "=";

      $cara12 = "?";

      $cara13 = "¿";

      $cara14 = "!";

      $cara15 = "¡";

      $cara16 = "{";

      $cara17 = "}";

      $cara18 = "@";



    
      $replaceString = "-";
      $originalString = $request->product_name; 

    
      $replacelower = strtolower($originalString);

      
      $convert_url = str_replace($searchString, $replaceString, $replacelower);

    

      $data = array($searchString, $cara1,$cara2,$cara3,$cara4,$cara5,$cara6,$cara7,$cara8,$cara9,$cara10,$cara11,$cara12,$cara13,$cara14,$cara15,$cara16,$cara17,$cara18);

      $convert_url2 = str_replace($data, $searchStringCara, $convert_url);

     
      $convert_url3 = str_replace("--", $searchStringCaraFinal, $convert_url2); 

     

      $file1 = $request->file('product_img');
      $file2 = $request->file('product_imggo');     

      $fileName1 = $file1->getClientOriginalName();
      $fileName2 = $file2->getClientOriginalName();    

      $filePath1 = $request->file('product_img')->storeAs('uploads', $fileName1, 'public');
      $filePath2 = $request->file('product_imggo')->storeAs('uploads', $fileName2, 'public');

      $post = new Product;     

      $post->product_name = $request->product_name;
      $post->product_img = $file1->getClientOriginalName();
      $post->product_imggo = $file2->getClientOriginalName();
      $post->product_imggt = $file1->getClientOriginalName();  
      $post->url_name = $convert_url3;
      $post->product_content = $request->product_content;
      $post->maincategory_id = $request->maincategory_id;
      $post->type_id = $request->type_id;   
      $post->price = $request->price;
      $post->unit = $request->unit; 
      $post->save();

      $userpost = new UserProduct;

      $userpost->user_id = $user_id ;
      $userpost->product_id = $post->id ;
      $userpost->maincategory_id  = $request->maincategory_id;


      $userpost->save();

      return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($maincategoryurl,$productname,$subcategoryid,$postid)
    {

      $mc_id = $subcategoryid;

      $product_id = $postid;
   
      $mc_id_numb = (int)$mc_id;

      $product_id_numb = (int)$postid;

      
      $category = Product::select('products.product_name','products.url_name','products.product_img','products.product_content','products.price','products.unit','t.type_name','mc.id as maincategoryid','products.id as productid','products.product_imggo','products.product_imggt','t.type_color','products.instagram_url','products.mlibre_url')   
      ->join('users_products as up', 'up.product_id', '=', 'products.id')
      ->join('users as u', 'u.id', '=', 'up.user_id')    
      ->join('types as t', 't.id', '=', 'products.type_id')   
      ->join('maincategorys as mc', 'mc.id', '=', 'products.maincategory_id')   
      ->where('products.id', $product_id_numb)    
      ->where('products.maincategory_id', $mc_id_numb)
      ->where('mc.maincategory_url', $maincategoryurl)   
      ->where('products.publish', null)    
      ->firstOrFail();
      

      $category2 = Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_name','mc.maincategory_url','mc.maincategory_icon')
      ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
      ->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
      ->where('mc.subcategory_id', 1)
      ->get(); 
 



      return view('product', [
        'product' => $category,
        'categorys2' => $category2 
      ]);





    }


    
  }
