<?php
/**
 * MoCustomerFixture
 *
 */
class MoCustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'trn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'cid', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1),
			'trn' => array('column' => 'trn', 'unique' => 1)
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
			'cid' => 'Lorem ips',
			'email' => 'Lorem ipsum dolor sit a',
			'trn' => 'Lorem ipsum dolor '
		),
	);

}
