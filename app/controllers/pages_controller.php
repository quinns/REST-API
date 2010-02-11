<?php
class PagesController extends AppController {

	var $name = 'Pages';

	var $helpers = array('Html','Javascript');

	var $uses = array();

	var $components = array('RequestHandler');

	function display() 
	{
	
		
		$path = func_get_args();

		if (!count($path)) {
			$this->redirect('/');
		}
		$count = count($path);
		$page = $subpage = $title = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title = Inflector::humanize($path[$count - 1]);
		}

		$this->set(compact('page', 'subpage', 'title'));

		if ($this->RequestHandler->isMobile()) 
		{
		//	$this->layout = 'iphone';
			$this->render(join('/', $path));
		}
		else
		{
			$this->render(join('/', $path));
		}
		

		
	}
	
	function stats_redirect(){
		$this->redirect('http://dc-api.nu-designs.us:888');
		exit();
	}
}

?>