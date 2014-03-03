<?php
App::uses('AppController', 'Controller');
/**
 * PsrContacts Controller
 *
 * @property PsrContact $PsrContact
 * @property PaginatorComponent $Paginator
 */
class PsrContactsController extends AppController {

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
		$this->PsrContact->recursive = 0;
		$this->set('psrContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PsrContact->exists($id)) {
			throw new NotFoundException(__('Invalid psr contact'));
		}
		$options = array('conditions' => array('PsrContact.' . $this->PsrContact->primaryKey => $id));
		$this->set('psrContact', $this->PsrContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PsrContact->create();
			if ($this->PsrContact->save($this->request->data)) {
				$this->Session->setFlash(__('The psr contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The psr contact could not be saved. Please, try again.'));
			}
		}
		$emps = $this->PsrContact->Emp->find('list');
		$this->set(compact('emps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PsrContact->exists($id)) {
			throw new NotFoundException(__('Invalid psr contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PsrContact->save($this->request->data)) {
				$this->Session->setFlash(__('The psr contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The psr contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PsrContact.' . $this->PsrContact->primaryKey => $id));
			$this->request->data = $this->PsrContact->find('first', $options);
		}
		$emps = $this->PsrContact->Emp->find('list');
		$this->set(compact('emps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PsrContact->id = $id;
		if (!$this->PsrContact->exists()) {
			throw new NotFoundException(__('Invalid psr contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PsrContact->delete()) {
			$this->Session->setFlash(__('The psr contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The psr contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
