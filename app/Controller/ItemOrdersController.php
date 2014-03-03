<?php
App::uses('AppController', 'Controller');
/**
 * ItemOrders Controller
 *
 * @property ItemOrder $ItemOrder
 * @property PaginatorComponent $Paginator
 */
class ItemOrdersController extends AppController {

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
		$this->ItemOrder->recursive = 0;
		$this->set('itemOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemOrder->exists($id)) {
			throw new NotFoundException(__('Invalid item order'));
		}
		$options = array('conditions' => array('ItemOrder.' . $this->ItemOrder->primaryKey => $id));
		$this->set('itemOrder', $this->ItemOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemOrder->create();
			if ($this->ItemOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The item order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item order could not be saved. Please, try again.'));
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
		if (!$this->ItemOrder->exists($id)) {
			throw new NotFoundException(__('Invalid item order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The item order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemOrder.' . $this->ItemOrder->primaryKey => $id));
			$this->request->data = $this->ItemOrder->find('first', $options);
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
		$this->ItemOrder->id = $id;
		if (!$this->ItemOrder->exists()) {
			throw new NotFoundException(__('Invalid item order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemOrder->delete()) {
			$this->Session->setFlash(__('The item order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
