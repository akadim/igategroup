<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingSessionController
 *
 * @author ragnarok
 */
class TrainingSessionsController extends AppController {

    //put your code here


    public function admin_trainingSessions() {
        return $this->TrainingSession->find('list', array('fields' => array('id', 'name')));
    }

    public function admin_index() {
        $trainingSessions = $this->TrainingSession->find('all');
        $this->set('trainingSessions', $trainingSessions);
    }

    public function admin_edit($id = null) {

        if ($this->request->is(array('put', 'post'))) {


            if ($this->TrainingSession->saveAll($this->request->data)) {
                
                if ($id != -1) {
                    $this->Session->setFlash(__('La session formation a été modifiée avec succès'), 'notif');
                } else {
                    $this->Session->setFlash(__('La session formation a été ajoutée avec succès'), 'notif');
                }
                return $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }

        $this->TrainingSession->id = $id;
        if (!$this->request->data) {
            $this->request->data = $this->TrainingSession->read();
        }
    }

    public function admin_delete($id = null) {
        $this->TrainingSession->delete($id);
        $this->Session->setFlash("La session formation a été supprimé avec succès", "notif");
        $this->redirect($this->referer());
    }

    public function admin_view($id = null) {
        $this->set('training', $this->TrainingSession->findById($id));
        $this->layout = false;
    }

}
