<?php
class UserController extends AppController {

	var $name = 'User';	
	var $uses = array('User');

	public function index($view = null) {
		debug($this->User->findAll());
		$this->set('usuaris', $this->User->findAll());
	}

	public function register($view = null) {

		if($this->request->is('post')){

			if($this->request->data['password'] != $this->request->data['password2']){
				//TODO: mostrar error!
			}

			$data = array(
				'email' => $this->request->data['email'],
				'name' => $this->request->data['name'],
				'password' => md5($this->request->data['password']),				
			);
			$User = new User();
			$User->create();
			$User->set($data);
			$User->save();
		}
	}
}