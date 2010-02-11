<?php
class StatusesController extends AppController {

	var $name = 'Statuses';

	
	function display($id = null) {
		$this->autoRender = false;
		$status = $this->Status->read(null, $id);
		echo $status['Status']['title'];
	}
	
	function clear_cache(){
		$this->autoRender = false;
		clearCache();
		$this->flash('The display cache has been reset.', '/');
	}
	


/*

	function index() {
		$this->Status->recursive = 0;
		$this->set('statuses', $this->paginate());
		if($this->params['url']['ext'] == 'xml'){
			$this->set('statuses', $this->Status->find('all'));
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Status.', true));
			$this->redirect(array('action'=>'index'));
		}
		$status = $this->Status->read(null, $id);
		$this->set('status', $status);
		$this->pageTitle = 'Status Detail: '.$status['Status']['title'];	
	}


	function add() {
		if (!empty($this->data)) {
			$this->Status->create();
			if ($this->Status->save($this->data)) {
				$this->Session->setFlash(__('The Status has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Status could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Status', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Status->save($this->data)) {
				$this->Session->setFlash(__('The Status has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Status could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Status->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Status', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Status->del($id)) {
			$this->Session->setFlash(__('Status deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
*/
}
?>