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
}
