<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rol_usuario', function(Blueprint $table)
		{
			$table->foreign('id_rol', 'fkAsigRol')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario', 'fkAsigUser')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rol_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fkAsigRol');
			$table->dropForeign('fkAsigUser');
		});
	}

}
