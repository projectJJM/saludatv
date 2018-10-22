<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tegumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tegumentos', function (Blueprint $table) {
                    $table->increments('id_tegumento');
					$table->string('dermatomicosis');
					$table->string('pigmentacion');
					$table->string('edema');
					$table->string('papilomas');
					$table->string('brohidrosis');
					$table->string('hiperdrosis');
					$table->string('pie');
			
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
        Schema::drop('tegumentos'); 
    }
}
