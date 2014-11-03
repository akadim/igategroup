<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Course
 *
 * @author ragnarok
 */
class Course {
    //put your code here
    var $hasMany="Inscription";
    var $belongsTo = "Module";
}
