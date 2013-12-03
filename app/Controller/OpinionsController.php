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
		$user = $this->Auth->user();
		$this->Opinion->set(array('coworker' => $user['username']));
		$this->Opinion->set(array('coworkerid' => $user['id']));
		if ($this->Opinion->save()) {
			$this->Session->setFlash("S'ha guardat l'opinió correctament");
			return $this->redirect(array('controller' => 'Places', 'action' => 'view', $placeid));
		}
		else{
			debug($this->Opinion->validationErrors);
			debug($this->Opinion->invalidFields());
		}
		$this->Session->setFlash("L'opinió no es pot guardar, si us plau, intenta-ho ens uns moments");        
    }


}