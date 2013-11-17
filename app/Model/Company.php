<?php
App::uses('User', 'Model');
class Company extends User{
	public $name = 'Company';
	public $actsAs = array('Inherit'); 

	public $_schema = array(
		'nif' => array(
			'type' => 'string',
			'length' => 50
		),
		'address' => array(
			'type' => 'string',
			'length' => 50
		),
	);

}
