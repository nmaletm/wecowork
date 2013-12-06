<?php
class PlacesController extends AppController {
	public $helpers = array('Html', 'Form');
	var $name = 'Places';
	var $uses = array('Place','Offer', 'Opinion');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }
	
	public function view($id = null) {
        $this->Place->id = $id;
        $this->set('place', $this->Place->read());
        $placeConditions = array("Offer.placeid" => $id);
		$this->set('offers', $this->Offer->find('all', array('conditions' => $placeConditions)));
		$opinionConditions = array("Opinion.placeid" => $id);
		$this->set('opinions', $this->Opinion->find('all', array('conditions' => $opinionConditions)));
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
	
    public function search() {
        if ($this->request->is('post')) {
            $q = $this->request->data['Place']['name'];
            $places = $this->ctSearchPlace($q);
        }
        $this->set('places', $places);
    }

    public function ctSearchPlace($q){
        /*
            Amb PostgreSQL  ILIKE  és un like no case sensitive!
        */
        $conditions = array('OR' => 
                array(
                    "Place.name  ILIKE " => "%".$q."%", 
                    "Place.address  ILIKE " => "%".$q."%",
                )
            );
        $list = $this->Place->find('all', array('conditions' => $conditions));
        if(count($list) == 0){
            $this->Session->setFlash("No s'ha trobat cap espai");
        }
        return $list;
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