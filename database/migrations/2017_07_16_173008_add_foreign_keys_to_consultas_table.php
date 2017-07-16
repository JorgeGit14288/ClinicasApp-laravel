<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConsultasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consultas', function(Blueprint $table)
		{
			$table->foreign('id_medico', 'fkConsulta_Medico')->references('id')->on('medicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_paciente', 'fkPaciente_consulta')->references('id')->on('pacientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consultas', function(Blueprint $table)
		{
			$table->dropForeign('fkConsulta_Medico');
			$table->dropForeign('fkPaciente_consulta');
		});
	}

}
