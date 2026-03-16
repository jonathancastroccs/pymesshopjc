<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserProduct;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

     if (env("APP_AUTHOR") == 'jonathancastro') { 
        Schema::create('users_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('maincategory_id');
            $table->timestamps();
        });

        $userpost = new UserProduct;
        $userpost->user_id = 1;
        $userpost->product_id = 1;    
        $userpost->maincategory_id = 1;      
        $userpost->save();

        $userpost = new UserProduct;
        $userpost->user_id = 1;
        $userpost->product_id = 2;       
        $userpost->maincategory_id = 1;      
        $userpost->save();

        $userpost = new UserProduct;
        $userpost->user_id = 1;
        $userpost->product_id = 3;     
        $userpost->maincategory_id = 1;      
        $userpost->save();

        $userpost = new UserProduct;
        $userpost->user_id = 1;
        $userpost->product_id = 4;       
        $userpost->maincategory_id = 2;      
        $userpost->save();
    }
    



}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_products');
    }
};
