<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBestandstypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bestandstype', function(Blueprint $table)
		{
			$table->integer('id', true);
            $table->timestamps();
			$table->string('naam', 12)->unique('idx_bestandstype_naam');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bestandstype');
	}

}
