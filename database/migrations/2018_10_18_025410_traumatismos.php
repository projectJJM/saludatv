<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Traumatismos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('traumatismos', function (Blueprint $table) {
                    $table->increments('id_traumatismos');
					$table->string('traumatismos');
				    $table->rememberToken();
				    $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('traumatismos');
    }
}
