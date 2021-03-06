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
class Prospect extends AppModel{
    //put your code here
    public $hasMany="Enrollement";
    
    public $validate = array(
        'name' => array(
            'nameRule1' => array(
                'rule' => 'isUnique',
                'message' => 'Ce nom existe déjà'
            ),
            'nameRule2' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Le champs \'Nom complet\' est requis'
            )
        ),
        
        'email' => array(
            'emailRule1' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Email\' est requis'
            ),
            'emailRule2' => array(
                'rule' => 'email',
                'message' => 'Votre email n\'est pas valide'
            )
        ),
        
        'tel' => array(
            'telRule1' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Tel\' est requis'
            ),
            'telRule2' => array(
                'rule' => array('minLength', 10),
                'message' => 'Le numéro de téléphone doit comporter 10 chiffres'
            ),
            'telRule3' => array(
                'rule' => array('maxLength', 10),
                'message' => 'Le numéro de téléphone doit comporter 10 chiffres'
            ),
            'telRule4' => array(
                'rule' => array('phone', '/^[0-9]{10}$/'),
                'message' => 'Le numéro de téléphone est mal saisi'
            )
        ),
        
        'gsm' => array(
            'telRule1' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'GSM\' est requis'
            ),
            'telRule2' => array(
                'rule' => array('minLength', 10),
                'message' => 'GSM doit comporter 10 chiffres'
            ),
            'telRule3' => array(
                'rule' => array('maxLength', 10),
                'message' => 'GSM doit comporter 10 chiffres'
            ),
            'telRule4' => array(
                'rule' => array('phone', '/^[0-9]{10}$/'),
                'message' => ' GSM  mal saisi'
            )
        ),
        
        'birthday' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Date naissance\' est requis'
        ),
        
        'birthplace' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Lieu de naissance\' est requis'
        ),
        
        'address' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Adresse\' est requis'
        ),
        
        'formations' => array(
                'rule' => 'notEmpty',
                'message' => 'Le champs \'Formation\' est requis'
        ),
    );
}
