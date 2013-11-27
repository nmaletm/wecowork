<?php
class Place extends AppModel{

	public $name = 'Place';
	public $primaryKey = 'id';


	public $validate = array(
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => "El nom de l'espai és necessari"
			)
		),
	);
}