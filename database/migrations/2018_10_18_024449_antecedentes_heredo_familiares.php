<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AntecedentesHeredoFamiliares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('antecedentes_heredo_familiares', function (Blueprint $table) {
                    $table->increments('id_anthf');
					$table->string('diabetes');
					$table->string('artritis');
					$table->string('gota');
					$table->string('hallux_valgus');
					$table->string('mal_formacion_genetica_en_pies');
					$table->string('otros');
					
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
       Schema::drop('antecedentes_heredo_familiares');
    }
}
