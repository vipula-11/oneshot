<?php
App::uses('AppController', 'Controller');
/**
 * MailOrders Controller
 *
 * @property MailOrder $MailOrder
 * @property PaginatorComponent $Paginator
 */
class MailOrdersController extends AppController {

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
		$this->MailOrder->recursive = 0;
		$this->set('mailOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MailOrder->exists($id)) {
			throw new NotFoundException(__('Invalid mail order'));
		}
		$options = array('conditions' => array('MailOrder.' . $this->MailOrder->primaryKey => $id));
		$this->set('mailOrder', $this->MailOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MailOrder->create();
			if ($this->MailOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The mail order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail order could not be saved. Please, try again.'));
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
		if (!$this->MailOrder->exists($id)) {
			throw new NotFoundException(__('Invalid mail order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MailOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The mail order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MailOrder.' . $this->MailOrder->primaryKey => $id));
			$this->request->data = $this->MailOrder->find('first', $options);
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
		$this->MailOrder->id = $id;
		if (!$this->MailOrder->exists()) {
			throw new NotFoundException(__('Invalid mail order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MailOrder->delete()) {
			$this->Session->setFlash(__('The mail order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mail order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
