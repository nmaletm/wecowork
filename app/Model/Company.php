<?php
App::uses('User', 'Model');
class Company extends User{
	public $name = 'Company';
	public $actsAs = array('Inherit'); 

	public function __construct($id = false, $table = null, $ds = null) {
	    parent::__construct($id, $table, $ds);
		$this->data["type"] = parent::$companyType;
	}
}
