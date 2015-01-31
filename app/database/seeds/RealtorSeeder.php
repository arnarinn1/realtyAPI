<?php


class RealtorSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realtor')->delete();

		Realtor::create(array('name' => 'Remax'));
	}
}