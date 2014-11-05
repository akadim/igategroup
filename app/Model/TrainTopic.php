<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainRubrique
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class TrainTopic extends AppModel {
    //put your code here
    
    public $belongsTo = "TrainCategory";
    public $hasMany = "Training";
    
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => "le champs 'libellé' est requis",
            'required' => false
        ),
        
        'train_category_id' => array(
            'rule' => 'notEmpty',
            'message' => "le champs 'Catégorie' est requis",
            'required' => true
        )
    );
}
