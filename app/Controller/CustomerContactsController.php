<?php
App::uses('AppController', 'Controller');
/**
 * CustomerContacts Controller
 *
 * @property CustomerContact $CustomerContact
 * @property PaginatorComponent $Paginator
 */
class CustomerContactsController extends AppController {

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
		$this->CustomerContact->recursive = 0;
		$this->set('customerContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerContact->exists($id)) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		$options = array('conditions' => array('CustomerContact.' . $this->CustomerContact->primaryKey => $id));
		$this->set('customerContact', $this->CustomerContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerContact->create();
			if ($this->CustomerContact->save($this->request->data)) {
				$this->Session->setFlash(__('The customer contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer contact could not be saved. Please, try again.'));
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
		if (!$this->CustomerContact->exists($id)) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerContact->save($this->request->data)) {
				$this->Session->setFlash(__('The customer contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerContact.' . $this->CustomerContact->primaryKey => $id));
			$this->request->data = $this->CustomerContact->find('first', $options);
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
		$this->CustomerContact->id = $id;
		if (!$this->CustomerContact->exists()) {
			throw new NotFoundException(__('Invalid customer contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerContact->delete()) {
			$this->Session->setFlash(__('The customer contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
