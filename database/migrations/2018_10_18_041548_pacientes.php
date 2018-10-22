<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	Schema::create('pacientes', function (Blueprint $table) {
                    $table->increments('id_paciente');
					$table->string('a_paterno');
					$table->string('a_materno');
					$table->string('nombre');
					$table->string('calle');
					$table->string('colonia');
					$table->string('cp');
					$table->string('telefono');
					$table->string('sexo');
					$table->double('edad');
					$table->double('estatura');
					$table->double('peso');
					$table->double('n_calzado');
					$table->string('ocupacion');
					$table->string('tratamientos_previos');
					$table->string('alergias');
					$table->string('motivo_de_consulta');
					
			       $table->integer('id_municipio')->unsigned();
		           $table->foreign('id_municipio')->references('id_municipio')->on('municipios');
				   
			       $table->integer('id_anthf')->unsigned();
		           $table->foreign('id_anthf')->references('id_anthf')->on('antecedentes_heredo_familiares');
				   
				   
			       $table->integer('id_antp')->unsigned();
		           $table->foreign('id_antp')->references('id_antp')->on('antecedentes_patologicos');
				   
				   
			       $table->integer('id_antnp')->unsigned();
		           $table->foreign('id_antnp')->references('id_antnp')->on('antecedentes_no_patologicos');
				   
				   
			       $table->integer('id_explod')->unsigned();
		           $table->foreign('id_explod')->references('id_explod')->on('exploracion_dorsales');
				   
				   $table->integer('id_deportes')->unsigned();
		           $table->foreign('id_deportes')->references('id_deportes')->on('deportes');
				   
				   
				   
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
        Schema::drop('pacientes');
    }
}
