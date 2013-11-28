<?php
class OffersController extends AppController {
	public $helpers = array('Html', 'Form');
	var $name = 'Offers';
	var $uses = array('Offer');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }
	
	public function view($id = null) {
        $this->Offer->id = $id;
        $this->set('offer', $this->Offer->read());
    }

    public function index() {
        $this->set('offers', $this->Offer->find('all'));
    }

    public function add() {
       if ($this->request->is('post')) {
            $this->ctAddOffer();
        }
    }
	
	public function ctAddOffer(){
		$this->Offer->create();
		$this->Offer->set($this->request->data);
		$this->Offer->set(array('id' => rand(0,99999999)));
		$this->Offer->set(array('publicationdate' => date('Y-m-d H:i:s')));
		if ($this->Offer->save()) {
			$this->Session->setFlash("S'ha guardat l'oferta correctament");
			return $this->redirect(array('action' => 'index'));
		}
		else{
			debug($this->Offer->validationErrors);
			debug($this->Offer->invalidFields());
		}
		$this->Session->setFlash("L'oferta no es pot guardar, si us plau, intenta-ho ens uns moments");        
    }


}