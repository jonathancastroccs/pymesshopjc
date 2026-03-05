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

		
}
