<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEspecialidadMedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('especialidad_medico', function(Blueprint $table)
		{
			$table->foreign('id_especialidad', 'fk_especialidaes_asignacion')->references('id')->on('especialidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_medico', 'fk_medico_asignacion')->references('id')->on('medicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('especialidad_medico', function(Blueprint $table)
		{
			$table->dropForeign('fk_especialidaes_asignacion');
			$table->dropForeign('fk_medico_asignacion');
		});
	}

}
