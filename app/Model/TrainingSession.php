<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingSession
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class TrainingSession extends AppModel{
    //put your code here
    
    public $belongsTo = array("Training", "Location") ;
    public $hasMany = "TrainRegistration";
}
