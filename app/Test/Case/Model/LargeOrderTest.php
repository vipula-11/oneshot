<?php
App::uses('LargeOrder', 'Model');

/**
 * LargeOrder Test Case
 *
 */
class LargeOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.large_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LargeOrder = ClassRegistry::init('LargeOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LargeOrder);

		parent::tearDown();
	}

}
