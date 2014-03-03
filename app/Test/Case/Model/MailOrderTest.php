<?php
App::uses('MailOrder', 'Model');

/**
 * MailOrder Test Case
 *
 */
class MailOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mail_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailOrder = ClassRegistry::init('MailOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailOrder);

		parent::tearDown();
	}

}
