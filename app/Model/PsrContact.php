<?php
App::uses('AppModel', 'Model');
/**
 * PsrContact Model
 *
 * @property Emp $Emp
 */
class PsrContact extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'emp_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_no' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Emp' => array(
			'className' => 'Emp',
			'foreignKey' => 'emp_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
