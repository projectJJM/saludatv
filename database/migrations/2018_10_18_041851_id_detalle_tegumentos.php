<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdDetalleTegumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_detalle_tegumentos', function (Blueprint $table) {
                    $table->increments('id_detalle_tegumento');
				    $table->integer('id_explod')->unsigned();
		            $table->foreign('id_explod')->references('id_explod')->on('exploracion_dorsales');
			        $table->integer('id_tegumento')->unsigned();
		            $table->foreign('id_tegumento')->references('id_tegumento')->on('tegumentos');
			        
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
        Schema::drop('id_detalle_tegumentos');
    }
}
