<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingMethodDetail
 *
 * @author ragnarok
 */
class TrainingMethodDetail extends AppModel{
    //put your code here
    
    public $belongsTo = "Training";
    public $belongsTo = "TrainingMethod";
}
