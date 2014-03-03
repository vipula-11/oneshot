<?php
App::uses('AppController', 'Controller');
/**
 * LoCustomers Controller
 *
 * @property LoCustomer $LoCustomer
 * @property PaginatorComponent $Paginator
 */
class LoCustomersController extends AppController {

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
		$this->LoCustomer->recursive = 0;
		$this->set('loCustomers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LoCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid lo customer'));
		}
		$options = array('conditions' => array('LoCustomer.' . $this->LoCustomer->primaryKey => $id));
		$this->set('loCustomer', $this->LoCustomer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoCustomer->create();
			if ($this->LoCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The lo customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lo customer could not be saved. Please, try again.'));
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
		if (!$this->LoCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid lo customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LoCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The lo customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lo customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LoCustomer.' . $this->LoCustomer->primaryKey => $id));
			$this->request->data = $this->LoCustomer->find('first', $options);
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
		$this->LoCustomer->id = $id;
		if (!$this->LoCustomer->exists()) {
			throw new NotFoundException(__('Invalid lo customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LoCustomer->delete()) {
			$this->Session->setFlash(__('The lo customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lo customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
