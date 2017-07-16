<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultaPadecimientoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consulta_padecimiento', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->integer('id_consulta')->unsigned()->index('fkDetalleConsulta_idx');
			$table->integer('id_padecimiento')->unsigned()->index('fkDetallesPadecimiento_idx');
			$table->string('descripcion', 500);
			$table->primary(['id','id_consulta']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consulta_padecimiento');
	}

}
