<?php
App::uses('BusinessContact', 'Model');

/**
 * BusinessContact Test Case
 *
 */
class BusinessContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessContact = ClassRegistry::init('BusinessContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessContact);

		parent::tearDown();
	}

}
