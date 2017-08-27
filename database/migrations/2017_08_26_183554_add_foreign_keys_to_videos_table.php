<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('videos', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_videos_propiedades')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('videos', function(Blueprint $table)
		{
			$table->dropForeign('FK_videos_propiedades');
		});
	}

}
