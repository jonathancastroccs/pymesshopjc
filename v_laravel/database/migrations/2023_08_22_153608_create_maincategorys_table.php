<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\MainCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincategorys', function (Blueprint $table) {
            $table->id();
            $table->string('maincategory_icon',255)->nullable();
            $table->string('maincategory_name',255)->nullable();
            $table->string('maincategory_url',255)->nullable();
            $table->string('promo_url',255)->nullable();              
            $table->unsignedInteger('subcategory_id');   
            $table->timestamps();
        });        

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-house';
        $maincategory->maincategory_name = 'Cartas';
        $maincategory->maincategory_url = 'cartas';
        $maincategory->subcategory_id = 1;
        $maincategory->save();

        $maincategory = new MainCategory;
        $maincategory->maincategory_icon = 'fa-solid fa-house';
        $maincategory->maincategory_name = 'Tazos';
        $maincategory->maincategory_url = 'tazos';
        $maincategory->subcategory_id = 1;
        $maincategory->save();       



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maincategorys');
    }
};
