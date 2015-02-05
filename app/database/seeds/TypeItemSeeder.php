<?php


class TypeItemSeeder extends Seeder 
{
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

		TypeItem::create(array('type_itemid' => '40', 
							   'type_name' => 'Lyfta'));

		TypeItem::create(array('type_itemid' => '50', 
							   'type_name' => 'Fermetrar'));

		TypeItem::create(array('type_itemid' => '60', 
							   'type_name' => 'Tegund'));

		TypeItem::create(array('type_itemid' => '70', 
							   'type_name' => 'Inngangur'));
	}
}