<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('product_name',255)->nullable();
        $table->string('product_img',255)->nullable();
        $table->string('product_imggo',255)->nullable();
        $table->string('product_imggt',255)->nullable();
        $table->string('url_name',255)->nullable();          
        $table->longText('product_content')->nullable();
        $table->string('instagram_url',255)->nullable();
        $table->string('mlibre_url',255)->nullable();           
        $table->unsignedInteger('maincategory_id');
        $table->unsignedInteger('type_id');           
        $table->integer('price');
        $table->integer('unit');           
        $table->boolean('publish')->nullable();
        $table->integer('views')->default('0');                  
        $table->timestamps();
      });


      $post = new Product;
      $post->product_name = 'Carta Pokemon Mixta';
      $post->product_img = 'catalina-blanca.png';
      $post->product_imggo = 'catalina-blanca.png';
      $post->product_imggt = 'catalina-blanca.png';
      $post->url_name = 'carta-pokemon-mixta';
      $post->product_content = '<h2>Carta pokemon Mixta Numero #2</h2><br><p>cartas pokemon gotta catch em all de nintendo, decorativa cartas de los años 90</p>';
      $post->instagram_url = 'DVg8Y7ngZZL';
      $post->maincategory_id = 1;  
      $post->type_id = 1;
      $post->price = 5;
      $post->unit = 1;                      
      $post->save();


      $post = new Product;
      $post->product_name = 'Carta Pokemon Nidorina';
      $post->product_img = 'catalina-blanca.png';
      $post->product_imggo = 'catalina-blanca.png';
      $post->product_imggt = 'catalina-blanca.png';
      $post->url_name = 'carta-pokemon-nidorina';
      $post->product_content = '<h2>Carta pokemon Numero #30</h2><br><p>cartas pokemon gotta catch em all de nintendo, tipo veneno cartas de los años 90</p>';     
      $post->maincategory_id = 2;       
      $post->type_id = 1;
      $post->price = 5;
      $post->unit = 1;                    
      $post->save();

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
