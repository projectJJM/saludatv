<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExploracionPlantarEnMetatarsos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exploracion_plantar_en_metatarsos', function (Blueprint $table) {
                    $table->increments('id_explopem');
					$table->string('edema');
					$table->string('dolor');
					$table->string('hiperqueratosis');
			
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
        Schema::drop('exploracion_plantar_en_metatarsos');
    }
}
