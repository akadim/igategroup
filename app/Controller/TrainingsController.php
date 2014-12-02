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

    public $uses = array('TrainTopic', 'TrainCategory', 'Training');

    public function show_trainings($id = null) {
        $trainTopic = $this->TrainTopic->find('all', array('conditions' => array('TrainCategory.id' => $id)));
        $trainTopic = current($trainTopic);
        $trainTopic = current($trainTopic);
        $this->set('trainTopic', $trainTopic);

        $trainCategory = $this->TrainCategory->find('all', array('conditions' => array('id' => $trainTopic['id'])));
        $trainCategory = current($trainCategory);
        $trainCategory = current($trainCategory);
        $this->set('trainCategory', $trainCategory);

        $trainings = $this->Training->find('all', array('conditions' => array('TrainTopic.id' => $id)));
        $this->set('trainings', $trainings);
    }

    public function show_training($id = null) {
        
        $training = $this->Training->find('all', array('conditions' => array('Training.id' => $id)));
        $training = current($training);
        $training = current($training);
        $this->set('training', $training);
        
        $trainTopic = $this->TrainTopic->find('all', array('conditions' => array('TrainTopic.id' => $training['train_topic_id'])));
        $trainTopic = current($trainTopic);
        $trainTopic = current($trainTopic);
        $this->set('trainTopic', $trainTopic);

        $trainCategory = $this->TrainCategory->find('all', array('conditions' => array('TrainCategory.id' => $trainTopic['train_category_id'])));
        $trainCategory = current($trainCategory);
        $trainCategory = current($trainCategory);
        $this->set('trainCategory', $trainCategory);

    }

    public function list_trainings($id = null) {
        $this->layout = false;
        $trainings = $this->Training->find('list', array('fields' => array('id', 'name'), 'conditions' => array('train_topic_id' => $id)));
        $this->set('trainings', $trainings);
    }

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
