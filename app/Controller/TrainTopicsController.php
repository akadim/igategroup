<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainTopicController
 *
 * @author ragnarok
 */
App::uses('TrainTopic', 'Model');

class TrainTopicsController extends AppController {

    //put your code here
  
    public function admin_traintopics() {
        return $this->TrainTopic->find('list', array('fields' => array('id', 'name')));
    }

    public function admin_index() {
        $topics = $this->TrainTopic->find('all');
        $this->set('topics', $topics);
    }

    public function admin_edit($id = null) {
        if ($this->request->is(array('put', 'post'))) {
            if ($this->TrainTopic->save($this->request->data)) {
                if ($id != -1) {
                    $this->Session->setFlash(__('La rubrique de formation a été modifiée avec succès'), 'notif');
                } else {
                    $this->Session->setFlash(__('La rubrique de formation a été ajoutée avec succès'), 'notif');
                }
                return $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }

        $this->TrainTopic->id = $id;
        if (!$this->request->data) {
            $this->request->data = $this->TrainTopic->read();
        }
    }

    public function admin_delete($id = null) {
        $this->TrainTopic->delete($id);
        $this->Session->setFlash("La rubrique de formation a été supprimé avec succès", "notif");
        $this->redirect($this->referer());
    }

    public function admin_view($id = null) {
        $this->set('topic', $this->TrainTopic->findById($id));
        $this->layout = false;
    }

}
