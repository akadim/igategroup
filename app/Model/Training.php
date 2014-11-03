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
    public $hasMany = array("TrainingSession", "TrainingMethodDetail");
}
