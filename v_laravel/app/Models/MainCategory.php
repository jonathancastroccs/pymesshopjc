<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{

	protected $table = 'maincategorys';	

	protected $fillable = [		
		'maincategory_name',
		'maincategory_url',
		'maincategory_id',
		'promo_url',
		'promo_banner'		
	];

	public function getMainCategorysById($subcategory)
	{
		return MainCategory::select('maincategorys.id','maincategorys.maincategory_url','maincategorys.maincategory_name')   
        ->where('maincategorys.maincategory_url', $subcategory) 
        ->firstOrFail();

	}

		
}
