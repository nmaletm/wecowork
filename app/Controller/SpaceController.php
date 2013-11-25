<?php
class SpaceController extends AppController {

	var $name = 'Space';
	var $uses = array('User','Coworker','Company');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','addCoworker','addCompany','login');
    }

    public function index() {
        
    }

    public function add() {
       
    }


}