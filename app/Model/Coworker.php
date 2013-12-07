<?php
App::uses('User', 'Model');

class Coworker extends User{
	public $name = 'Coworker';
	public $actsAs = array('Inherit'); 

}
