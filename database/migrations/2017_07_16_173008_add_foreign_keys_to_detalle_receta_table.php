<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetalleRecetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detalle_receta', function(Blueprint $table)
		{
			$table->foreign('id_receta', 'fkDetallesReceta')->references('id')->on('recetas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detalle_receta', function(Blueprint $table)
		{
			$table->dropForeign('fkDetallesReceta');
		});
	}

}
