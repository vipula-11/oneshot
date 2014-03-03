<?php
/**
 * MailOrderFixture
 *
 */
class MailOrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'order_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'order_no', 'unique' => 1),
			'cid' => array('column' => 'cid', 'unique' => 0)
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
			'cid' => 'Lorem ips'
		),
	);

}
