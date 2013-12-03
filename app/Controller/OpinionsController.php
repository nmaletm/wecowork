<?php
class OpinionsController extends AppController {
	public $helpers = array('Html', 'Form');
	var $name = 'Opinions';
	var $uses = array('Place','Opinion', 'User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('');
    }

    public function add($placeid = null) {
       if ($this->request->is('post')) {
            $this->ctAddOpinion($placeid);
        }
    }
	
	public function ctAddOpinion($placeid = null){
		$this->Opinion->create();
		$this->Opinion->set($this->request->data);
		$this->Opinion->set(array('id' => rand(0,99999999)));
		$this->Opinion->set(array('placeid' => $placeid));
		$this->Opinion->set(array('publicationdate' => date('Y-m-d H:i:s')));
		$this->Place->id = $placeid;
        $this->set('place', $place->Place->read());
        $conditions = array("User.id" => 'place.ownerid');
		$this->set('user', $this->User->find('first', array('conditions' => $conditions)));
		$this->Opinion->set(array('coworker' => 'user.username'));
		$this->Opinion->set(array('coworkerid' => 'user.id'));
		if ($this->Opinion->save()) {
			$this->Session->setFlash("S'ha guardat l'espai correctament");
			return $this->redirect(array('controller' => 'Users', 'action' => 'view', $ownerid));
		}
		else{
			debug($this->Opinion->validationErrors);
			debug($this->Opinion->invalidFields());
		}
		$this->Session->setFlash("L'espai no es pot guardar, si us plau, intenta-ho ens uns moments");        
    }


}