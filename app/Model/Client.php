<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class Client extends AppModel {
    //put your code here
    public $belongsTo = "User";
    public $hasMany = "Registration";
}
