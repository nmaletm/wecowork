<?php
class User extends AppModel{
	public static $coworkerType = 1;
	public static $companyType = 2;
	
	public $name = 'User';
	public $primaryKey = 'id';

	public $username;
	public $password;
	public $email;

	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => "El nom d'usuari és necessari"
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'La contrasenya és necessaria'
			)
		),
		'email' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'El correu electronic és necessari'
			)
		)
	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}