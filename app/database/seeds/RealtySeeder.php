<?php


class RealtySeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realty')->delete();

		Realty::create(array('realty_codeid' => '2', 
						   	 'name' => 'Logafold 70',
						   	 'price' => '61900000',
						   	 'assessment_value' => '50900000',
						   	 'fire_insurance_value' => '48000000',
						   	 'location' => 'Vesturbærinn',
						   	 'description' => 'Gott hús.',
						   	 'realtorid' => '1'));
	}
}