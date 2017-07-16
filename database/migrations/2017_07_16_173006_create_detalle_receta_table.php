<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleRecetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_receta', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->integer('id_receta')->unsigned()->index('fkDetallesReceta_idx');
			$table->string('medicamento', 100);
			$table->string('dosis', 200);
			$table->string('observaciones', 200)->nullable();
			$table->primary(['id','id_receta']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_receta');
	}

}
