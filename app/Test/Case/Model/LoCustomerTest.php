<?php
App::uses('LoCustomer', 'Model');

/**
 * LoCustomer Test Case
 *
 */
class LoCustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lo_customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LoCustomer = ClassRegistry::init('LoCustomer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LoCustomer);

		parent::tearDown();
	}

}
