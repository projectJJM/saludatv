<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdDetalleLaminaUngueales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_detalle_lamina_ungueales', function (Blueprint $table) {
                    $table->increments('id_detalle_lamina_ungueal');
					  
			        $table->integer('id_explod')->unsigned();
		            $table->foreign('id_explod')->references('id_explod')->on('exploracion_dorsales');
			        $table->integer('id_lamu')->unsigned();
		            $table->foreign('id_lamu')->references('id_lamu')->on('lamina_ungueales');
			
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
Schema::drop('id_detalle_lamina_ungueales');
    }
}
