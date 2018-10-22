<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AntecedentesPatologicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_patologicos', function (Blueprint $table) {
                    $table->increments('id_antp');
					$table->string('diabetes_miellitus');
					$table->string('artitris');
					$table->string('hipertencion');
					$table->string('vasculares');
					$table->string('gastritis');
					$table->string('hepatitis');
					$table->string('alcoholismo');
					$table->string('tabaquismo');
					
					$table->integer('id_traumatismos')->unsigned();
		            $table->foreign('id_traumatismos')->references('id_traumatismos')->on('traumatismos');
			        $table->integer('id_cirugias')->unsigned();
		            $table->foreign('id_cirugias')->references('id_cirugias')->on('cirugias');
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
       Schema::drop('antecedentes_patologicos');
    }
}
