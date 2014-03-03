<?php
App::uses('MoCustomer', 'Model');

/**
 * MoCustomer Test Case
 *
 */
class MoCustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mo_customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MoCustomer = ClassRegistry::init('MoCustomer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoCustomer);

		parent::tearDown();
	}

}
