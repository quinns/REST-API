<?php
class CitiesController extends AppController {

	var $name = 'Cities';
	var $paginate = array('order' => 'City.name ASC', 'conditions' => 'Region.status_id = 1', 'limit' => 50);
	var $uses = array('City', 'CompanyAddress', 'Region');
	
	function index() {
		$this->City->recursive = 1;		
		$this->set('cities', $this->paginate());
		if($this->params['url']['ext'] == 'xml'){
			$this->set('cities', $this->City->find('all', array('order' => 'City.name ASC', 'conditions' => 'Region.status_id = 1')));
		}
		
		$this->pageTitle = 'Cities Index';
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid City.', true));
			$this->redirect(array('action'=>'index'));
		}
		$city = $this->City->read(null, $id);
		$this->set('city', $city);
		$this->pageTitle = 'City Detail: '.$city['City']['name'];	

		
	}
/*
	function add() {
		if (!empty($this->data)) {
			$this->City->create();
			if ($this->City->save($this->data)) {
				$this->Session->setFlash(__('The City has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The City could not be saved. Please, try again.', true));
			}
		}
		$regions = $this->City->Region->find('list');
		$this->set(compact('regions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid City', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->City->save($this->data)) {
				$this->Session->setFlash(__('The City has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The City could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->City->read(null, $id);
		}
		$regions = $this->City->Region->find('list');
		$this->set(compact('regions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for City', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->City->del($id)) {
			$this->Session->setFlash(__('City deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
*/
}
?>