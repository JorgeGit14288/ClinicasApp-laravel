<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombres', 45);
			$table->string('apellidos', 45);
			$table->string('direccion', 45);
			$table->string('celular', 15);
			$table->string('tel_casa', 15)->nullable();
			$table->string('correo', 75);
			$table->boolean('activo')->nullable();
			$table->string('cargo', 45)->nullable();
			$table->integer('id_clinica')->unsigned()->index('fk_EmpleadoClinicas');
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
		Schema::drop('empleados');
	}

}
