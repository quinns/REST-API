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
}
?>