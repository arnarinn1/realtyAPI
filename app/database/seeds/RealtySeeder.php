<?php


class RealtySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realty')->delete();

		Realty::create(array('realty_codeid' => '2', 
						   	 'name' => 'Eggertsgata 241',
						   	 'price' => '50000',
						   	 'location' => 'Vesturbærinn',
						   	 'description' => 'Gott hús.',
						   	 'realtorid' => '1'));

	}
}