<?php


class TypeItemSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('type_item')->delete();

		TypeItem::create(array('type_itemid' => '10', 
							   'type_name' => 'Herbergi'));

		TypeItem::create(array('type_itemid' => '20', 
							   'type_name' => 'Baðherbergi'));

		TypeItem::create(array('type_itemid' => '30', 
							   'type_name' => 'Bílskúr'));
	}
}