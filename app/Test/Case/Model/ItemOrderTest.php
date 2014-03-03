<?php
App::uses('ItemOrder', 'Model');

/**
 * ItemOrder Test Case
 *
 */
class ItemOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemOrder = ClassRegistry::init('ItemOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemOrder);

		parent::tearDown();
	}

}
