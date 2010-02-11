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
	
}
?>