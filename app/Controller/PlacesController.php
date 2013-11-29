<?php
class PlacesController extends AppController {
	public $helpers = array('Html', 'Form');
	var $name = 'Places';
	var $uses = array('Place');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }
	
	public function view($id = null) {
        $this->Place->id = $id;
        $this->set('place', $this->Place->read());
        //trying to show the offers from a place
        $this->set('offer', $this->Offer->find('all', array('conditions' => array($id => $this->request->data['Offer']['placeid']))));
    }

    public function index() {
        $this->set('places', $this->Place->find('all'));
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