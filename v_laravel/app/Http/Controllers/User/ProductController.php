<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\UserPost;
use App\Models\UserProduct;
use App\Models\Type;


class ProductController extends Controller
{

	protected $categorys;
	protected $products;


	public function __construct(Category $categorys){  

		$this->categorys = $categorys;
	}
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

    	$this->products = new Product();

    	$mc_id = $subcategoryid;

    	$product_id = $postid;

    	$mc_id_numb = (int)$mc_id;

    	$product_id_numb = (int)$postid;

    	$category  =  $this->products->getProductsById($product_id_numb,$mc_id_numb,$maincategoryurl);    	

    	$category2 =  $this->categorys->getCategorys();

    	return view('product', [
    		'product' => $category,
    		'categorys2' => $category2 
    	]);


    }


    
}
