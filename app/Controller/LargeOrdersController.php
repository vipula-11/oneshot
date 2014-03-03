<?php
App::uses('AppController', 'Controller');
/**
 * LargeOrders Controller
 *
 * @property LargeOrder $LargeOrder
 * @property PaginatorComponent $Paginator
 */
class LargeOrdersController extends AppController {

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
		$this->LargeOrder->recursive = 0;
		$this->set('largeOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LargeOrder->exists($id)) {
			throw new NotFoundException(__('Invalid large order'));
		}
		$options = array('conditions' => array('LargeOrder.' . $this->LargeOrder->primaryKey => $id));
		$this->set('largeOrder', $this->LargeOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LargeOrder->create();
			if ($this->LargeOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The large order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large order could not be saved. Please, try again.'));
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
		if (!$this->LargeOrder->exists($id)) {
			throw new NotFoundException(__('Invalid large order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LargeOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The large order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LargeOrder.' . $this->LargeOrder->primaryKey => $id));
			$this->request->data = $this->LargeOrder->find('first', $options);
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
		$this->LargeOrder->id = $id;
		if (!$this->LargeOrder->exists()) {
			throw new NotFoundException(__('Invalid large order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LargeOrder->delete()) {
			$this->Session->setFlash(__('The large order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The large order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
