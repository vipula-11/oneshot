<?php
App::uses('AppController', 'Controller');
/**
 * BusinessContacts Controller
 *
 * @property BusinessContact $BusinessContact
 * @property PaginatorComponent $Paginator
 */
class BusinessContactsController extends AppController {

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
		$this->BusinessContact->recursive = 0;
		$this->set('businessContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BusinessContact->exists($id)) {
			throw new NotFoundException(__('Invalid business contact'));
		}
		$options = array('conditions' => array('BusinessContact.' . $this->BusinessContact->primaryKey => $id));
		$this->set('businessContact', $this->BusinessContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusinessContact->create();
			if ($this->BusinessContact->save($this->request->data)) {
				$this->Session->setFlash(__('The business contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business contact could not be saved. Please, try again.'));
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
		if (!$this->BusinessContact->exists($id)) {
			throw new NotFoundException(__('Invalid business contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BusinessContact->save($this->request->data)) {
				$this->Session->setFlash(__('The business contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BusinessContact.' . $this->BusinessContact->primaryKey => $id));
			$this->request->data = $this->BusinessContact->find('first', $options);
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
		$this->BusinessContact->id = $id;
		if (!$this->BusinessContact->exists()) {
			throw new NotFoundException(__('Invalid business contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BusinessContact->delete()) {
			$this->Session->setFlash(__('The business contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The business contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
