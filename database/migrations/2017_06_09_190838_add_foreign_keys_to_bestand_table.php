<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBestandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bestand', function(Blueprint $table)
		{
			$table->foreign('schijf', 'bestand_ibfk_1')->references('naam')->on('schijf')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign('directory', 'bestand_ibfk_2')->references('id')->on('directory')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('bestandstype', 'bestand_ibfk_3')->references('naam')->on('bestandstype')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bestand', function(Blueprint $table)
		{
			$table->dropForeign('bestand_ibfk_1');
			$table->dropForeign('bestand_ibfk_2');
            $table->dropForeign('bestand_ibfk_3');
		});
	}

}
