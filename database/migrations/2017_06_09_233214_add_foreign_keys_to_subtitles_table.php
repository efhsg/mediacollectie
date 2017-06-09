<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubtitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subtitles', function(Blueprint $table)
		{
			$table->foreign('bestand', 'subtitles_ibfk_1')->references('id')->on('files')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subtitles', function(Blueprint $table)
		{
			$table->dropForeign('subtitles_ibfk_1');
		});
	}

}
