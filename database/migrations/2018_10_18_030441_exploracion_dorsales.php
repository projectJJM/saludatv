<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExploracionDorsales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::create('exploracion_dorsales', function (Blueprint $table) {
                    $table->increments('id_explod');
					$table->string('tagumento');
					$table->string('lamina_ungueal');					
			
					$table->rememberToken();
				    $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('exploracion_dorsales');
    }
}
