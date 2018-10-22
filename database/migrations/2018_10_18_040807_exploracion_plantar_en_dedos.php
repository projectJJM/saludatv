<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExploracionPlantarEnDedos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('exploracion_plantar_en_dedos', function (Blueprint $table) {
                    $table->increments('id_exploped');
					$table->string('hallux_valvus');
					$table->string('quinto_varo');
					$table->string('dedos_en_garra');
					$table->string('dedos_en_martillo');
					$table->string('dedos_supraducto');
					$table->string('parabola_digital');
			
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
        Schema::drop('exploracion_plantar_en_dedos'); 
    }
}
