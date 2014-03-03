<?php
/**
 * PsrContactFixture
 *
 */
class PsrContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'emp_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'contact_no', 'unique' => 1),
			'emp_id' => array('column' => 'emp_id', 'unique' => 0)
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
			'emp_id' => 'Lorem ips',
			'contact_no' => 'Lorem ip'
		),
	);

}
