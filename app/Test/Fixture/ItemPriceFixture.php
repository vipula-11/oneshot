<?php
/**
 * ItemPriceFixture
 *
 */
class ItemPriceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary'),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('item_no', 'date'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'item_no' => 'Lorem ips',
			'date' => '2014-03-03',
			'price' => 1
		),
	);

}
