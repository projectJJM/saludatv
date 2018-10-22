<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdDetalleExploracionPlantarEnDedos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('id_detalle_exploracion_plantar_en_dedos', function (Blueprint $table) {
                    $table->increments('id_detalle_explopd');
					
					$table->integer('id_paciente')->unsigned();
		            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
			        $table->integer('id_exploped')->unsigned();
		            $table->foreign('id_exploped')->references('id_exploped')->on('exploracion_plantar_en_dedos');
			
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
        Schema::drop('id_detalle_exploracion_plantar_en_dedos');
    }
}
