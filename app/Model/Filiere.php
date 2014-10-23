<?php
App::uses('AppModel', 'Model');
class Filiere extends AppModel {
    public $name = "Filiere";
    public $hasMany = "Formation";
}
