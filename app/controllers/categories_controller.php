<?php
class CategoriesController extends AppController {

	var $name = 'Categories';	
	var $uses = array('Category', 'Region', 'RegionsCategory');
	var $paginate = array('order' => 'Category.title ASC', 'conditions' => 'Category.status_id = 1', 'limit' => 50);
	
	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
		if($this->params['url']['ext'] == 'xml'){
			$this->set('categories', $this->Category->find('all', array('conditions' => 'Category.status_id = 1')));
		}
		$this->pageTitle = 'Categories Index';
		

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		$category = $this->Category->read(null, $id);
		$this->set('category', $category);
		$this->pageTitle = 'Category Detail: '.$category['Category']['title'];
		

	}

	
/*
	function add() {
		if (!empty($this->data)) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The Category has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Category could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Category->Company->find('list');
		$regions = $this->Category->Region->find('list');
		$statuses = $this->Category->Status->find('list');
		$this->set(compact('companies', 'regions', 'statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Category', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The Category has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		$companies = $this->Category->Company->find('list');
		$regions = $this->Category->Region->find('list');
		$statuses = $this->Category->Status->find('list');
		$this->set(compact('companies','regions','statuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->del($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
*/
}
?>