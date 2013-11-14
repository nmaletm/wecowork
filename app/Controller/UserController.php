<?php
class UserController extends AppController {

	var $name = 'User';	
	var $uses = array('User');

	public function index($view = null) {

	}

	public function register($view = null) {
		if($this->request->is('post')){

			if($this->data['RegisterForm']['password'] != $this->data['RegisterForm']['password2']){
				//TODO: mostrar error!
			}

			$data = array(
				'username' => $this->data['RegisterForm']['username'],
				'email' => $this->data['RegisterForm']['email'],
				'name' => $this->data['RegisterForm']['name'],
				'password' => md5($this->data['RegisterForm']['password']),				
			);
			$this->User->create();
			$this->User->set($data);
			$this->User->save();
		}
	}

	public function login($view = null) {
		if($this->request->is('post')){

			$user = $this->User->find('first', array(
				'conditions' => array(
						'User.username' => $this->data['LoginForm']['username'],
						'User.password' => $this->data['LoginForm']['password'],
				)
			));

        	if ($user) {
				$this->redirect('/home/');
			}
		}
	}
}