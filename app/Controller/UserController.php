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

			if($this->data['RegisterForm']['password'] != $this->data['RegisterForm']['password2']){
				//TODO: mostrar error!
			}

			$data = array(
				'email' => $this->data['RegisterForm']['email'],
				'name' => $this->data['RegisterForm']['name'],
				'password' => md5($this->data['RegisterForm']['password']),				
			);
			$this->User->create();
			$this->User->set($data);
			$this->User->save();
		}
	}
}