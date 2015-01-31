<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealtyImage extends Migration 
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realty_image', function(Blueprint $table)
		{
			$table->increments('realty_imageid');
			$table->integer('realtyid')->unsigned()->references('realtyid')->on('realty')->index();
			$table->string('url');

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
		Schema::drop('realty_image');
	}
}
