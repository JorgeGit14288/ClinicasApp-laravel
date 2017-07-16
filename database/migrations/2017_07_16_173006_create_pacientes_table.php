<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pacientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dpi', 30)->nullable();
			$table->string('nombres', 45);
			$table->string('apellidos', 45);
			$table->string('direccion', 70);
			$table->string('celular', 15);
			$table->string('telefono_casa', 15)->nullable();
			$table->string('correo', 45)->nullable();
			$table->date('nacimiento')->nullable();
			$table->decimal('peso', 10, 0)->nullable()->default(0);
			$table->decimal('altura', 10, 0)->nullable()->default(0);
			$table->string('alergias', 300);
			$table->string('observaciones', 300)->nullable();
			$table->string('encargado', 60)->nullable();
			$table->string('tel_encargado', 15)->nullable();
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
		Schema::drop('pacientes');
	}

}
