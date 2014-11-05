<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingController
 *
 * @author ragnarok
 */
App::uses('TrainingMethodDetail', 'Model');
class TrainingsController extends AppController {

    //put your code here


    public function admin_trainings() {
        return $this->Training->find('list', array('fields' => array('id', 'name')));
    }

    public function admin_index() {
        $trainings = $this->Training->find('all');
        $this->set('trainings', $trainings);
    }

    public function admin_edit($id = null) {

        if ($this->request->is(array('put', 'post'))) {


            if ($this->Training->save($this->request->data)) {
                
                if ($id != -1) {
                    $this->Session->setFlash(__('La formation a été modifiée avec succès'), 'notif');
                } else {
                    $this->Session->setFlash(__('La formation a été ajoutée avec succès'), 'notif');
                }
                return $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }

        $this->Training->id = $id;
        if (!$this->request->data) {
            $this->request->data = $this->Training->read();
        }
    }

    public function admin_delete($id = null) {
        $this->Training->delete($id);
        $this->Session->setFlash("La formation a été supprimé avec succès", "notif");
        $this->redirect($this->referer());
    }

    public function admin_view($id = null) {
        $this->set('training', $this->Training->findById($id));
        $this->layout = false;
    }

}
