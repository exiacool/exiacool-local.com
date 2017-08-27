<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLugarXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lugar_x_propiedad', function(Blueprint $table)
		{
			$table->integer('id_lugar_x_propiedad');
			$table->integer('id_propiedad')->index('FK_id_propiedad_idx');
			$table->primary(['id_lugar_x_propiedad','id_propiedad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lugar_x_propiedad');
	}

}
