<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('files', function(Blueprint $table)
		{
			$table->foreign('schijf', 'files_ibfk_1')->references('naam')->on('discs')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('directory', 'files_ibfk_2')->references('id')->on('directories')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('bestandstype', 'files_ibfk_3')->references('naam')->on('filetypes')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('files', function(Blueprint $table)
		{
			$table->dropForeign('files_ibfk_1');
			$table->dropForeign('files_ibfk_2');
			$table->dropForeign('files_ibfk_3');
		});
	}

}
