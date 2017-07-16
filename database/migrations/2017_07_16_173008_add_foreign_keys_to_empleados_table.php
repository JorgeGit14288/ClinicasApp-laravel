<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->foreign('id_clinica', 'fk_EmpleadoClinicas')->references('id')->on('clinicas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->dropForeign('fk_EmpleadoClinicas');
		});
	}

}
