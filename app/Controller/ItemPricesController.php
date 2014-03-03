<?php
App::uses('AppController', 'Controller');
/**
 * ItemPrices Controller
 *
 * @property ItemPrice $ItemPrice
 * @property PaginatorComponent $Paginator
 */
class ItemPricesController extends AppController {

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
		$this->ItemPrice->recursive = 0;
		$this->set('itemPrices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemPrice->exists($id)) {
			throw new NotFoundException(__('Invalid item price'));
		}
		$options = array('conditions' => array('ItemPrice.' . $this->ItemPrice->primaryKey => $id));
		$this->set('itemPrice', $this->ItemPrice->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemPrice->create();
			if ($this->ItemPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The item price has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item price could not be saved. Please, try again.'));
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
		if (!$this->ItemPrice->exists($id)) {
			throw new NotFoundException(__('Invalid item price'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The item price has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item price could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemPrice.' . $this->ItemPrice->primaryKey => $id));
			$this->request->data = $this->ItemPrice->find('first', $options);
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
		$this->ItemPrice->id = $id;
		if (!$this->ItemPrice->exists()) {
			throw new NotFoundException(__('Invalid item price'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemPrice->delete()) {
			$this->Session->setFlash(__('The item price has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item price could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
