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

		Realtor::create(array('name' => 'Remax fasteignasala', 'image_url' => "http://remax.is/templates/softverk/image_v2/remax_logo_huge.png"));
		Realtor::create(array('name' => 'Fasteignasalan', 'image_url' => "http://www.mbl.is/fasteignir/images/552-logo.gif"));
		Realtor::create(array('name' => 'Domus', 'image_url' => "http://www.domus.is/img/domus_logo.jpg"));
		Realtor::create(array('name' => 'Valhöll', 'image_url' => "http://www.valholl.is/img/logo.png"));
	}
}