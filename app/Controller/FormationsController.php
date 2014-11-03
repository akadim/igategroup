<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormationsController
 *
 * @author ragnarok
 */
class FormationsController extends AppController {
    //put your code here
    public $helpers = array('Html', 'Form');
    public $uses = array('Filiere', 'Formation');
    
    public function filieres(){
        $filieres = $this->Filiere->find('all', array('conditions' => array('organizer' => 'IGATE')));
        $this->set('filieres', $filieres);  
        return $filieres;
    }
    
    public function formations($filiere_id){
        $formations = $this->Formation->find('all', array('conditions' => array('filiere_id' => $filiere_id)));
        $this->set('formations', $formations);  
        return $formations;
    }
    
    public function show($id = null) {
        $formation = $this->Formation->find('all', array('conditions' => array('Formation.id' => $id), 'recursive' => 1));
        $formation = current($formation);
        $formation = current($formation);
        $this->set('formation', $formation);
    }
}
