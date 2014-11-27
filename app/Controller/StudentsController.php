<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentsController
 *
 * @author ragnarok
 */
class StudentsController extends AppController {
    
    public function signup_prospect($id=null){
        $this->set('formation' , $id);
    }

}