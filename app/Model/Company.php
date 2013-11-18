<?php
App::uses('User', 'Model');
class Company extends User{
	public $name = 'Company';
	public $actsAs = array('Inherit'); 


}
