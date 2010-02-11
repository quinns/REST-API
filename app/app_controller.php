<?php
	class AppController extends Controller {
		
		var $helpers = array('Html', 'Text', 'Cache', 'Javascript', 'Ajax');
		var $components = array('RequestHandler');
		
		var $live_site = 'http://rest-api.quinnsupplee.com';
		var $app_name = 'REST API with XML and CakePHP Demo ';
		
		function beforeRender(){

			if(isset($this->params['url']['ext']) && $this->params['url']['ext'] != 'xml'){
				$this->cacheAction = "1 day";
			}
			$this->set('live_site', $this->live_site);
			$this->set('app_name', $this->app_name);
		}
		
		function flash($message = null, $redirect = null){
			if($message != null){
				$this->Session->setFlash($message);
			}
			if($redirect != null){
				$this->redirect($redirect);
			}
		}
		
	}
?>