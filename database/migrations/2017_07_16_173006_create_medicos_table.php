<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('colegiado_no', 45);
			$table->string('nombres', 45);
			$table->string('apellidos', 45);
			$table->string('direccion', 45);
			$table->string('celular', 45);
			$table->string('tel_casa', 45)->nullable();
			$table->string('tel_otro', 45)->nullable();
			$table->string('correo', 45);
			$table->integer('id_clinica')->unsigned()->index('fkmedico_clinica_idx');
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
		Schema::drop('medicos');
	}

}
