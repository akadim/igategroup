<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etudiant
 *
 * @author ragnarok
 */
App::uses('AppModel', 'Model');
class Etudiant extends AppModel{
    //put your code here
    var $hasMany="Inscription";
    
}
