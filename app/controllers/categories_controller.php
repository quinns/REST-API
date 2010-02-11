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

}
?>