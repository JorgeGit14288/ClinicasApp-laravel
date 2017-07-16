<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConsultaPadecimientoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consulta_padecimiento', function(Blueprint $table)
		{
			$table->foreign('id_consulta', 'fkDetalleConsulta')->references('id')->on('consultas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_padecimiento', 'fkDetallesPadecimiento')->references('id')->on('padecimientos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consulta_padecimiento', function(Blueprint $table)
		{
			$table->dropForeign('fkDetalleConsulta');
			$table->dropForeign('fkDetallesPadecimiento');
		});
	}

}
