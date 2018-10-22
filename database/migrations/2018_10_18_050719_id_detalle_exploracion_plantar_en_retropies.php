<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdDetalleExploracionPlantarEnRetropies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_detalle_exploracion_plantar_en_retropies', function (Blueprint $table) {
                    $table->increments('id_detalle_retropie');
					
					$table->integer('id_paciente')->unsigned();
		            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
			        $table->integer('id_exploper')->unsigned();
		            $table->foreign('id_exploper')->references('id_exploper')->on('exploracion_plantar_en_retropies');
			
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
        Schema::drop('id_detalle_exploracion_plantar_en_retropies');  
    }
}
