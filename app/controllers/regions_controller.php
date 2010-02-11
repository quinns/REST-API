<?php
class RegionsController extends AppController {

	var $name = 'Regions';
	var $uses = array('Region', 'Category', 'RegionsCategory');
	var $paginate = array('order' => 'Region.title ASC', 'conditions' => 'Region.status_id = 1', 'limit' => 50);

	function index() {
		$this->Region->recursive = 0;
		$this->set('regions', $this->paginate());
		if($this->params['url']['ext'] == 'xml'){
			$this->set('regions', $this->Region->find('all', array('conditions' => 'Region.status_id = 1')));
		}
		$this->pageTitle = 'Regions Index';
			
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Region.', true));
			$this->redirect(array('action'=>'index'));
		}
		$region = $this->Region->read(null, $id);
		$count = 0;
		$region_data = $this->_read_region($id);
		foreach($region['Category'] as $category){
			$company_count = $this->_company_count($id, $category['id'], $region_data);
			$region['Category'][$count]['company_count'] = $company_count;
			if($company_count == 0){
				unset($region['Category'][$count]);
			}
			$count++;
		}
		$this->set('region', $region);
		$this->pageTitle = 'Region Detail: '.$region['Region']['title'];	

	}
	
	function categories() {
		$this->Category->recursive = -1;
		$this->Region->unbindModel(
			array(
				'hasMany' => array(
					'City'
				),
				
			), false		
		);
		
		$regions = $this->Region->find('all', array(
			'conditions' => 'Region.status_id = 1', 
			'order' => 'Region.title ASC'
			)
		);
		$categories = $this->RegionsCategory->find('all', array());
		$this->set(compact('categories', 'regions'));
		$this->pageTitle = 'All Categories in All Regions';
	}
	
	function category($region_id = null, $category_id){
		$this->RegionsCategory->recursive = 0;
		$this->Region->recursive = 2;
		$this->Region->unbindModel(
			array(
				'hasMany' => array(
					'City'
				),
				'hasAndBelongsToMany' => array(
					'Category'
				)
			), false		
		);
				
		$region = $this->Region->read(null, $region_id);
		$this->set('region', $region);
		$this->Category->recursive = -1;
		$category = $this->Category->read(null, $category_id);
		$this->set('category', $category);
		
		$company_list = array();

		$this->set('companies', $company_list);
		//$this->set(compact('regionsCategory'));
		
	}
	
	function _read_region($region_id){
		$this->Region->cacheQueries = true;
		$this->RegionsCategory->cacheQueries = true;
		$this->RegionsCategory->recursive = 0;
		$this->Region->recursive = 2;
		$this->Region->unbindModel(
			array(
				'hasMany' => array(
					'City'
				),
				'hasAndBelongsToMany' => array(
					'Category',
				)
			), false		
		);
				
		$region = $this->Region->read('Region.id', $region_id);
		return($region);
	
	}
	
	function _company_count($region_id = null, $category_id, $region_data = null){
		$this->Region->cacheQueries = true;
		$this->RegionsCategory->cacheQueries = true;
		$this->RegionsCategory->recursive = 0;
		$this->Region->recursive = 2;
		$this->Region->unbindModel(
			array(
				'hasMany' => array(
					'City'
				),
				'hasAndBelongsToMany' => array(
					'Category',
				)
			), false		
		);



		$region = $region_data;
		$this->Category->recursive = -1;
		$category = $this->Category->read('Category.id, Category.status_id', $category_id);		
		$company_list = array();
		
		return(count($company_list));
	}
	

	
	
/*
	function add() {
		if (!empty($this->data)) {
			$this->Region->create();
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The Region has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Region could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Region->Company->find('list');
		$categories = $this->Region->Category->find('list');
		$statuses = $this->Region->Status->find('list');
		$this->set(compact('companies', 'categories', 'statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Region', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Region->save($this->data)) {
				$this->Session->setFlash(__('The Region has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Region could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Region->read(null, $id);
		}
		$companies = $this->Region->Company->find('list');
		$categories = $this->Region->Category->find('list');
		$statuses = $this->Region->Status->find('list');
		$this->set(compact('companies','categories','statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Region', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Region->del($id)) {
			$this->Session->setFlash(__('Region deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
*/
}
?>