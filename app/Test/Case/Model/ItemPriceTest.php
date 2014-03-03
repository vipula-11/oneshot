<?php
App::uses('ItemPrice', 'Model');

/**
 * ItemPrice Test Case
 *
 */
class ItemPriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemPrice = ClassRegistry::init('ItemPrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemPrice);

		parent::tearDown();
	}

}
