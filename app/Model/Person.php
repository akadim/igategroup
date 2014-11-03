<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class Person extends AppModel{
    //put your code here
    
    public $belongsTo="Client";
}
