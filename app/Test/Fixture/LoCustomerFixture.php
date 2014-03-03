<?php
/**
 * LoCustomerFixture
 *
 */
class LoCustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'credit_limit' => array('type' => 'integer', 'null' => true, 'default' => null),
		'brn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'cid', 'unique' => 1)
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
			'credit_limit' => 1,
			'brn' => 'Lorem ips'
		),
	);

}
