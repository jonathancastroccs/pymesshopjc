<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('settings', function (Blueprint $table) {
    		$table->id();
    		$table->string('app_author');
    		$table->string('app_copyright');    		
    		$table->string('app_email');
            $table->string('phrase');
            $table->string('app_donate');
            $table->string('app_phone');          		         
            $table->timestamps();
        });

        $phrase = '$2y$10$1htbU0Lhb8IpkFcRSB6uQ.Z8b0/jyLPTADO9y9Uwhq6qhyEDob5ry';

        $s = new Setting;    	
        $s->app_author = env("APP_AUTHOR");
        $s->app_copyright = env("APP_COPYRIGHT");
        $s->app_email = env("APP_EMAIL");
        $s->phrase =  $phrase;
        $s->app_donate = env("APP_DONATE");
        $s->app_phone = env("APP_PHONE");             	  	        
        $s->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('settings');
    }
};
