<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainCategory
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class TrainCategory extends AppModel {
    //put your code here
    
    public $hasMany = "TrainTopic";
    
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => "le champs 'libellé' est requis",
            'required' => false
        )
    );
}
