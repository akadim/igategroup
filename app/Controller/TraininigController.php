<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TraininigController
 *
 * @author ragnarok
 */
class TraininigController {
    //put your code here
   
    public function admin_index(){
        $trainings = $this->Training->find('all');
        $this->set('trainings', $trainings);
    }
}
