<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExploracionPlantarEnRetropies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('exploracion_plantar_en_retropies', function (Blueprint $table) {
                    $table->increments('id_exploper');
					$table->string('eritema');
					$table->string('edema');
					$table->string('dolor');
                    $table->string('hiperqueratosis');
                    $table->string('anhidrosis');
                    $table->string('pie');
                    $table->string('otras');
			
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
        Schema::drop('exploracion_plantar_en_retropies');
    }
}
