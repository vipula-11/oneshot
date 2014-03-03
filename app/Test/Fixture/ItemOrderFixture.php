<?php
/**
 * ItemOrderFixture
 *
 */
class ItemOrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'order_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'item_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('order_no', 'item_no'), 'unique' => 1),
			'item_no' => array('column' => 'item_no', 'unique' => 0)
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
			'order_no' => 'Lorem ips',
			'item_no' => 'Lorem ips',
			'quantity' => 1
		),
	);

}
