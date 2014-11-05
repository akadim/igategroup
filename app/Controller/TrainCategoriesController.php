<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainCategoryController
 *
 * @author ragnarok
 */
App::uses('TrainCategory', 'Model');

class TrainCategoriesController extends AppController {

    //put your code here

    
    public function admin_categories(){
        return $this->TrainCategory->find('list', array('fields' => array('id','name')));
    }

    public function admin_index() {
        $categories = $this->TrainCategory->find('all');
        $this->set('categories', $categories);
    }

    public function admin_edit($id = null) {

        if ($this->request->is(array('put', 'post'))) {
            if ($this->TrainCategory->save($this->request->data)) {
                if ($id != -1) {
                    $this->Session->setFlash(__('La catégorie de formation a été modifiée avec succès'), 'notif');
                } else {
                    $this->Session->setFlash(__('La catégorie de formation a été ajoutée avec succès'), 'notif');
                }
                return $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }
        
        $this->TrainCategory->id = $id;
        if (!$this->request->data) {
            $this->request->data = $this->TrainCategory->read();
        }
    }

    public function admin_delete($id = null) {
        $this->TrainCategory->delete($id);
        $this->Session->setFlash("La catégorie de formation a été supprimé avec succès", "notif");
        $this->redirect($this->referer());
    }

    public function admin_view($id = null) {
        $this->set('category', $this->TrainCategory->findById($id));
        $this->layout = false;
    }

}
