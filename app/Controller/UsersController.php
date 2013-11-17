<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('Coworker','Company');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Usuari invalid');
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->id = ($this->request->data['Coworker']['username'])?
                                    $this->request->data['Coworker']['username']:
                                    $this->request->data['Company']['username'];
            if (!$this->User->exists()) {
                $this->Session->setFlash("Ja existeix un usuari amb aquest nom d'usuari.");
            }
            else{
                if($this->request->data['Coworker']){
                    $this->Coworker->create();
                    if ($this->Coworker->save($this->request->data)) {
                        $this->Session->setFlash("S'ha guardat l'usuari correctament");
                        return $this->redirect(array('action' => 'index'));
                    }
                }
                else{
                    $this->Company->create();
                    if ($this->Company->save($this->request->data)) {
                        $this->Session->setFlash("S'ha guardat l'usuari correctament");
                        return $this->redirect(array('action' => 'index'));
                    }
                }
                $this->Session->setFlash("L'usuari no es pot guardar, si us plau, intenta-ho ens uns moments");        
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException("Usuari invàlid");
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash("L'usuari s'ha guardat correctament");
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash("L'usuari no es pot guardar, si us plau, intenta-ho ens uns moments");
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException("Usuari invàlid");
        }
        if ($this->User->delete()) {
            $this->Session->setFlash("S'ha esborrat l'usuari correctament");
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash("L'usuari no s'ha esborrat");
        return $this->redirect(array('action' => 'index'));
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
}