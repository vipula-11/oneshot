<?php
/**
 * CustomerContactFixture
 *
 */
class CustomerContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'contact_no', 'unique' => 1),
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
			'cid' => 'Lorem ips',
			'contact_no' => 'Lorem ipsum'
		),
	);

}
