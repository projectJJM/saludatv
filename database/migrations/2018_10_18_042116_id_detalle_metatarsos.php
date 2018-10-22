<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdDetalleMetatarsos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_detalle_metatarsos', function (Blueprint $table) {
                    $table->increments('id_detalle_metatarsos');
					
					$table->integer('id_paciente')->unsigned();
		            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
			        $table->integer('id_explopem')->unsigned();
		            $table->foreign('id_explopem')->references('id_explopem')->on('exploracion_plantar_en_metatarsos');
			
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
        Schema::drop('id_detalle_metatarsos');
    }
}
