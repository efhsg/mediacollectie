<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOndertitelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ondertiteling', function(Blueprint $table)
		{
			$table->foreign('bestand', 'ondertiteling_ibfk_1')->references('id')->on('bestand')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ondertiteling', function(Blueprint $table)
		{
			$table->dropForeign('ondertiteling_ibfk_1');
		});
	}

}
