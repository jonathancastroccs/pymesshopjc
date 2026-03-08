<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{	

	protected $table = 'settings';

	protected $fillable = [		
		'app_author',
		'app_copyright',
		'app_email',
		'app_donate',
		'app_phone'					
	];	

}
