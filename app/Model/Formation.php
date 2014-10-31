<?php
App::uses('AppModel', 'Model');
class Formation extends AppModel {
    //put your code here
    var $hasAndBelongsTo="Module";
    var $belongsTo = "Filiere";
}
