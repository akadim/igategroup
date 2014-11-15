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
    
    public function all_filieres(){
        $filieres = $this->Filiere->find('list', array('fields' => array('id', 'libelle')));
        $this->set('filieres', $filieres);  
        return $filieres;
    }
    
    public function formations($filiere_id){
        $formations = $this->Formation->find('all', array('conditions' => array('filiere_id' => $filiere_id)));
        $this->set('formations', $formations);  
        return $formations;
    }
    
    public function organizers(){
        $formations = $this->Formation->find('all', array('fields' => array('DISTINCT Formation.organizer'),'conditions' => array('Formation.organizer !=' => 'IGATE')));
        $this->set('formations', $formations);  
        return $formations;
    }
    
    public function licences($organizer=null){
        $formations = $this->Formation->find('all', array('conditions' => array('Formation.filiere_id' => 4)));
        $this->set('formations', $formations);  
        return $formations;
    }
    
    public function masters($organizer=null){
        $formations = $this->Formation->find('all', array('conditions' => array('Formation.filiere_id' => 5)));
        $this->set('formations', $formations);  
        return $formations;
    }
    
    public function formations_list($filiere_id){
        $this->layout = false;
        $formations = $this->Formation->find('list', array('fields' => array('id', 'name'), 'conditions' => array('filiere_id' => $filiere_id)));
        $this->set('formations', $formations);  
    }
    
    public function show($id = null) {
        $formation = $this->Formation->find('all', array('conditions' => array('Formation.id' => $id), 'recursive' => 1));
        $formation = current($formation);
        $formation = current($formation);
        $this->set('formation', $formation);
    }
}
