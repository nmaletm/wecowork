<?php
class Offer extends AppModel{

	public $name = 'Offer';
	public $primaryKey = 'id';


	public $validate = array(
		'title' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => "El títol per l'oferta és necessari"
			)
		),
	);
}