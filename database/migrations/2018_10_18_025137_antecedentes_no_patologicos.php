<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AntecedentesNoPatologicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('antecedentes_no_patologicos', function (Blueprint $table) {
                    $table->increments('id_antnp');
					$table->string('tipo_de_parto');
					$table->string('comienzo_de_gateo');
					$table->string('ambulacion');
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
        Schema::drop('antecedentes_no_patologicos');  
    }
}
