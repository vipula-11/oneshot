<?php
/**
 * BusinessFixture
 *
 */
class BusinessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'brn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'brn', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit a'
		),
	);

}
