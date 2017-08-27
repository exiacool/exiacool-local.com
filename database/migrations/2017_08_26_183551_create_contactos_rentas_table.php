<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactosRentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos_rentas', function(Blueprint $table)
		{
			$table->integer('id_contacto', true);
			$table->string('nombre', 50);
			$table->string('apellido', 50)->nullable();
			$table->string('telefono', 50);
			$table->string('detalle', 130)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactos_rentas');
	}

}
