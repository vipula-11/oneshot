<?php
App::uses('PsrContact', 'Model');

/**
 * PsrContact Test Case
 *
 */
class PsrContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.psr_contact',
		'app.emp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PsrContact = ClassRegistry::init('PsrContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PsrContact);

		parent::tearDown();
	}

}
