<?php
class User extends AppModel{

	public $name = 'User';
	public $primaryKey = 'id';

	public $_schema = array(
		'id' => array('type' => 'integer'),
		'username' => array(
			'type' => 'string',
			'length' => 50
		),
		'password' => array(
			'type' => 'string',
			'length' => 50
		),
		'email' => array(
			'type' => 'string',
			'length' => 30
		),
		'birthdate' => array('type' => 'datetime'),
		'message' => array('type' => 'text'),
	);

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