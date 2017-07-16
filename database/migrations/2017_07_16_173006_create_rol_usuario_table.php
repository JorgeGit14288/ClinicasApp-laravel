<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rol_usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario')->unsigned();
			$table->integer('id_rol')->unsigned()->index('fkAsigRol_idx');
			$table->primary(['id_usuario','id_rol']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rol_usuario');
	}

}
