<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    // public $timestamps = false;  

    protected $fillable = [     
        'product_name',
        'product_img',
        'product_imggo',
        'product_imggt',
        'url_name',
        'product_content',        
        'maincategory_id',
        'type_id',
        'price',
        'unit',        
        'publish',
        'views'        
    ];
}
