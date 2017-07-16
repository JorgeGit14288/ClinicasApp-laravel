<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clinicas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 75);
			$table->string('especialidad', 45);
			$table->string('direccion', 50);
			$table->string('administrador', 45);
			$table->string('tel_1', 15);
			$table->string('tel_2', 15)->nullable();
			$table->string('tel_3', 15)->nullable();
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
		Schema::drop('clinicas');
	}

}
