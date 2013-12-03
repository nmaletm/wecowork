<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('User','Coworker','Company','Place');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','addCoworker','addCompany','login');
    }

    public function index($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
        $conditions = array("Place.ownerid" => $id);
        $this->set('places', $this->Place->find('all', array('conditions' => $conditions)));
    }

    public function view($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
        $conditions = array("Place.ownerid" => $id);
        $this->set('places', $this->Place->find('all', array('conditions' => $conditions)));
    }

   /* public function view($username = null) {
        $this->User->username = $username;
        if (!$this->User->exists()) {
            throw new NotFoundException('Usuari invalid');
        }
        $this->set('user', $this->User->read(null, $username));
    }*/

    public function add() {

    }

    public function addCoworker() {
        if ($this->request->is('post')) {
            $this->ctAddCoworker();
        }
    }

    public function addCompany() {
        if ($this->request->is('post')) {
            $this->ctAddCompany();
        }
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash("Usuari incorrecte");
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }


    public function ctAddCoworker(){
        $user = $this->User->find('first', array(
            'conditions' => array('User.username' => $this->request->data['Coworker']['username'])
        ));

        if($user) {
            $this->Session->setFlash("Ja existeix un usuari amb aquest nom d'usuari.");
        }
        else{
            $this->Coworker->create();
            $this->Coworker->set($this->request->data);
            $this->Coworker->set(array('id' => rand(0,99999999)));
            if ($this->Coworker->save()) {
                $this->Session->setFlash("S'ha guardat l'usuari correctament");
                return $this->redirect(array('action' => 'index'));
            }
            else{
                debug($this->Coworker->validationErrors);
                debug($this->Coworker->invalidFields());
            }
            $this->Session->setFlash("L'usuari no es pot guardar, si us plau, intenta-ho ens uns moments");        
        }
    }
    public function ctAddCompany(){
        $user = $this->User->find('first', array(
            'conditions' => array('User.username' => $this->request->data['Company']['username'])
        ));
        if($user) {
            $this->Session->setFlash("Ja existeix un usuari amb aquest nom d'usuari.");
        }
        else{
            $this->Company->create();
            $this->Company->set($this->request->data);
            $this->Company->set(array('id' => rand(0,99999999)));
            if ($this->Company->save()) {
                $this->Session->setFlash("S'ha guardat l'usuari correctament");
                return $this->redirect(array('action' => 'index'));
            }
            else{
                debug($this->Company->validationErrors);
                debug($this->Company->invalidFields);
            }
        }
        $this->Session->setFlash("L'usuari no es pot guardar, si us plau, intenta-ho ens uns moments");    
    }
}