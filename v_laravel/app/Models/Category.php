<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table = 'categorys';


	protected $fillable = [		
		'category_name'		
	];

	public function getCategorys()
	{
		return Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_name','mc.maincategory_url','mc.maincategory_icon')
		->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
		->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
		->where('mc.subcategory_id', 1)
		->get();

	}

	
}
