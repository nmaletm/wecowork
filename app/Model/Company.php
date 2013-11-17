<?php
App::uses('User', 'Model');
class Company extends User{
	var $name = 'Company';

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
