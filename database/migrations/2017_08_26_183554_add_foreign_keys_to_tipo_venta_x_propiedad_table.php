<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoVentaXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_venta_x_propiedad', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_tipo_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_venta_x_propiedad', function(Blueprint $table)
		{
			$table->dropForeign('FK_tipo_propiedad');
		});
	}

}
