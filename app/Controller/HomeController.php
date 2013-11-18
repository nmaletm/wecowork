<?php
class HomeController extends AppController {

	var $name = 'Home';	
	var $uses = array('User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

	public function index($view = null) {
		
	}

}