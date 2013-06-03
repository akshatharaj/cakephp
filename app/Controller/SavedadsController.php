<?php

App::import('Controller', 'Base');

class SavedAdsController extends BaseController{

    public function add(){
        $this->SavedAd->create();
        if ($this->SavedAd->save(array ('ad_id' => $this->request->query['ad_id'], 'user_id' => $this->request->query['user_id']) )){
            $this->Session->setFlash(__('The ad has been saved to your favourites'));
            $this->redirect(array('controller' => 'ads', 'action' => 'index'));
        }
        else{
            $this->Session->setFlash(__('The ad could not be saved!'));
            $this->redirect(array('controller' => 'ads', 'action' => 'index'));
        }
    }        

    public function index(){
        $this->loadModel('Ad');
        $this->loadModel('User');
        $this->set('user', $this->Session->read('User')['User']['first_name']);
        $ad_ids = $this->SavedAd->field('ad_id', array( 'user_id =' => $this->Session->read('User')['User']['id']));
        $this->set('ads', $this->Ad->find('all', array( 'conditions' => array( 'id' => $ad_ids ))));
        $this->set('users', $this->User);
    }

}

?>
