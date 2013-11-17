<?php
App::uses('User', 'Model');
class Coworker extends User{
	public $name = 'Coworker';
	public $actsAs = array('Inherit'); 

	public $_schema = array(
		'projectsInformation' => array('type' => 'text'),
		'professionalInformation' => array('type' => 'text'),
		'personalInformation' => array('type' => 'text'),
	);

}
