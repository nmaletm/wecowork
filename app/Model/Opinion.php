<?php
class Opinion extends AppModel{

	public $name = 'Opinion';
	public $primaryKey = 'id';

	public $text;
	public $qualification;


	public $validate = array(
		'text' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => "Escriu la teva opinió Siusplau"
			)
		),
		'qualification' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Siusplau puntua l\'espai'
			)
		),
	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}