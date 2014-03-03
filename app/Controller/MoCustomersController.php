<?php
App::uses('AppController', 'Controller');
/**
 * MoCustomers Controller
 *
 * @property MoCustomer $MoCustomer
 * @property PaginatorComponent $Paginator
 */
class MoCustomersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MoCustomer->recursive = 0;
		$this->set('moCustomers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MoCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid mo customer'));
		}
		$options = array('conditions' => array('MoCustomer.' . $this->MoCustomer->primaryKey => $id));
		$this->set('moCustomer', $this->MoCustomer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MoCustomer->create();
			if ($this->MoCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The mo customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mo customer could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MoCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid mo customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MoCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The mo customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mo customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MoCustomer.' . $this->MoCustomer->primaryKey => $id));
			$this->request->data = $this->MoCustomer->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MoCustomer->id = $id;
		if (!$this->MoCustomer->exists()) {
			throw new NotFoundException(__('Invalid mo customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MoCustomer->delete()) {
			$this->Session->setFlash(__('The mo customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mo customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
