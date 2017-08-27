<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoVentaXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_venta_x_propiedad', function(Blueprint $table)
		{
			$table->string('tipo_propiedad', 20);
			$table->integer('id_propiedad')->index('FK_tipo_propiedad_idx');
			$table->integer('precio');
			$table->integer('reduccion')->nullable();
			$table->integer('financiado')->nullable();
			$table->primary(['tipo_propiedad','id_propiedad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_venta_x_propiedad');
	}

}
