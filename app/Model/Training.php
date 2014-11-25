<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Training
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class Training extends AppModel {
    //put your code here
    
    public $belongsTo="TrainTopic";
    public $hasMany = "TrainingSession";
    
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => "le champs 'libellé' est requis",
            'required' => true
        ),
        
        'duration' => array(
          'duractionRule1' => array(
            'rule' => 'naturalNumber',
            'message' => "Le champs 'durée' doit être numérique"
            ),
          'durationRule2' => array(
            'rule' => 'notEmpty',
            'message' => "Le champs 'durée' est requis"
          )
        ),
        'price' => array(
          'priceRule1' => array(
            'rule' => array('decimal', 2),
            'message' => "Le champs 'prix' est mal formaté"
            ),
          'priceRule2' => array(
            'rule' => 'notEmpty',
            'message' => "Le champs 'prix' est requis"
          )
        ),
        
        'train_topic_id' => array(
            'rule' => 'notEmpty',
            'message' => "le champs 'Rubrique' est requis",
            'required' => true
        )
    );
}
