<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealtor extends Migration
 {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realtor', function(Blueprint $table)
		{
			$table->increments('realtorid');
			$table->string('name', 50)->unique();
			$table->integer('realty_imageid')->unsigned()->references('imageid')->on('realty_image')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('realtor');
	}
}
