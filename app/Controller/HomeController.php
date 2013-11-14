<?php
class HomeController extends AppController {

	var $name = 'Home';	
	var $uses = array('User');

	public function index($view = null) {
		debug($this->User->find('all'));
		$this->set('usuaris', $this->User->find('all'));
	}

}