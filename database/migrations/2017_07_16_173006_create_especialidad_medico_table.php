<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspecialidadMedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('especialidad_medico', function(Blueprint $table)
		{
			$table->integer('id_medico')->unsigned();
			$table->integer('id_especialidad')->unsigned()->index('fk_especialidaes_asignacion_idx');
			$table->primary(['id_medico','id_especialidad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('especialidad_medico');
	}

}
