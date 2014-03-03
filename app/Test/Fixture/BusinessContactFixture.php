<?php
/**
 * BusinessContactFixture
 *
 */
class BusinessContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'brn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'contact_no', 'unique' => 1),
			'brn' => array('column' => 'brn', 'unique' => 0)
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
			'brn' => 'Lorem ips',
			'contact_no' => 'Lorem ip'
		),
	);

}
