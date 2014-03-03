<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'order_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'order_no', 'unique' => 1)
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
			'date' => '2014-03-03'
		),
	);

}
