<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_paciente')->unsigned()->index('fkPaciente_consulta_idx');
			$table->integer('id_medico')->unsigned()->index('fkConsulta_Medico_idx');
			$table->date('fecha');
			$table->time('hora_inicio');
			$table->time('hora_fin')->nullable();
			$table->string('descripcion', 500)->nullable();
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
		Schema::drop('consultas');
	}

}
