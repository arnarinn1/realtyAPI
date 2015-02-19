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

		Realtor::create(array('name' => 'Remax Ísland', 
							  'image_url' => "http://remax.is/templates/softverk/image_v2/remax_logo_huge.png",
							  'email' => 'remax@remax.is',
							  'phone_number' => '414-6060'));
		
		Realtor::create(array('name' => 'Fasteignasalan', 
							  'image_url' => "http://www.mbl.is/fasteignir/images/552-logo.gif",
							  'email' => 'allir@fasteignasalan.is',
							  'phone_number' => '512-3400'));
		
		Realtor::create(array('name' => 'Domus', 
							  'image_url' => "http://www.domus.is/img/domus_logo.jpg",
							  'email' => 'domus@domus.is',
							  'phone_number' => '440-6000'));
		
		Realtor::create(array('name' => 'Valhöll', 
						      'image_url' => "http://www.valholl.is/img/logo.png",
						      'email' => 'hjalp@valholl.is', 
						      'phone_number' => '588-4477'));
	}
}