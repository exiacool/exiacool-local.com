<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagenesXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagenes_x_propiedad', function(Blueprint $table)
		{
			$table->integer('id_propiedad')->primary();
			$table->integer('orden');
			$table->string('nombre', 50);
			$table->string('detalle', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imagenes_x_propiedad');
	}

}
