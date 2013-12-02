<?php
class PlacesController extends AppController {
	public $helpers = array('Html', 'Form');
	var $name = 'Places';
	var $uses = array('Place','Offer');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }
	
	public function view($id = null) {
        $this->Place->id = $id;
        $this->set('place', $this->Place->read());
        $conditions = array("Offer.placeid" => $id);
		$this->set('offers', $this->Offer->find('all', array('conditions' => $conditions)));
        //trying to show the offers from a place
        //$this->set('offer', $this->Offer->find('all', array('conditions' => array($id => $this->request->data['Offer']['placeid']))));
    }

    public function index() {
        $this->set('places', $this->Place->find('all'));
    }

    public function add($ownerid = null) {
       if ($this->request->is('post')) {
            $this->ctAddPlace($ownerid);
        }
    }
	
	public function ctAddPlace($ownerid = null){
		$this->Place->create();
		$this->Place->set($this->request->data);
		$this->Place->set(array('id' => rand(0,99999999)));
		$this->Place->set(array('ownerid' => $ownerid));
		if ($this->Place->save()) {
			$this->Session->setFlash("S'ha guardat l'espai correctament");
			return $this->redirect(array('controller' => 'Users', 'action' => 'view', $ownerid));
		}
		else{
			debug($this->Place->validationErrors);
			debug($this->Place->invalidFields());
		}
		$this->Session->setFlash("L'espai no es pot guardar, si us plau, intenta-ho ens uns moments");        
    }


}