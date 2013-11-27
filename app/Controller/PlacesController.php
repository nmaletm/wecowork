<?php
class PlacesController extends AppController {

	var $name = 'Places';
	var $uses = array('Place');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','addCoworker','addCompany','login');
    }

    public function index() {
        
    }

    public function add() {
       if ($this->request->is('post')) {
            $this->ctAddPlace();
        }
    }
	
	public function ctAddPlace(){
		$this->Place->create();
		$this->Place->set($this->request->data);
		$this->Place->set(array('id' => rand(0,99999999)));
		if ($this->Place->save()) {
			$this->Session->setFlash("S'ha guardat l'espai correctament");
			return $this->redirect(array('action' => 'index'));
		}
		else{
			debug($this->Place->validationErrors);
			debug($this->Place->invalidFields());
		}
		$this->Session->setFlash("L'espai no es pot guardar, si us plau, intenta-ho ens uns moments");        
    }


}