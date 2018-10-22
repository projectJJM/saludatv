<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaminaUngueales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('lamina_ungueales', function (Blueprint $table) {
                    $table->increments('id_lamu');
					$table->string('unicomicosis');
					$table->string('unicocriptosis');
					$table->string('callos_helomas');
					$table->string('discromias');
					$table->string('exostosis');
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
        Schema::drop('lamina_ungueales');
    }
}
