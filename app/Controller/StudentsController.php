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

    public $uses = array('Prospect', 'Enrollement');

    public function signup_prospect($id = null) {
        App::uses('CakeTime', 'Utility');
        if ($this->request->is('post')) {
            $prospect = $this->request->data['Prospect'];
            $prospect['active'] = 0;
            $prospect['birthday'] = CakeTime::format($prospect['birthday'], '%Y-%d-%m');
            $formations = $prospect['formations'];

            //die(print_r($this->request->data));
            if ($this->Prospect->save($prospect)) {
                foreach ($formations as $formation) {
                    $data['Enrollement']['prospect_id'] = $this->Prospect->id;
                    $data['Enrollement']['formation_id'] = $formation;
                    $data['Enrollement']['enrollement_date'] = date('Y-m-d');
                    $this->Enrollement->save($data);
                }
                $this->Session->setFlash(__('Votre inscription a été avec succès'), 'notif');
            }
        }
        $this->set('formation', $id);
    }

}
