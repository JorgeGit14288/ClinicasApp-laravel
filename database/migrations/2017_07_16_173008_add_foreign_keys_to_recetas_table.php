<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recetas', function(Blueprint $table)
		{
			$table->foreign('id_consulta', 'fkResetaConsulta')->references('id')->on('consultas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recetas', function(Blueprint $table)
		{
			$table->dropForeign('fkResetaConsulta');
		});
	}

}
