<?php
App::uses('User', 'Model');

class Coworker extends User{
	public $name = 'Coworker';
	public $actsAs = array('Inherit'); 

	public function __construct($id = false, $table = null, $ds = null) {
	    parent::__construct($id, $table, $ds);
		$this->data["type"] = parent::$coworkerType;
	}
}
