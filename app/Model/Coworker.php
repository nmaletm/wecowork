<?php
App::uses('User', 'Model');
class Coworker extends User{
	var $name = 'Coworker';

	public $_schema = array(
		'projectsInformation' => array('type' => 'text'),
		'professionalInformation' => array('type' => 'text'),
		'personalInformation' => array('type' => 'text'),
	);

}
