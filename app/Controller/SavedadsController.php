<?php

App::import('Controller', 'Base');

class SavedAdsController extends BaseController{

    public function add(){
        $saved_ad = $this->SavedAd->find('all', array( 'conditions' => array( 
                   'ad_id' => $this->request->query['ad_id'], 'user_id' => $this->request->query['user_id'])));
        if( $saved_ad ){
            $this->Session->setFlash(__('You already have this ad saved in your favourites'));
            $this->redirect(array('controller' => 'ads', 'action' => 'index'));
        }
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
        $this->set('users', $this->User);
        $id = $this->Session->read('User')['User']['id'];
        $this->set('ads', $this->Ad->query('Select ads.* from ads join saved_ads where ads.id = saved_ads.ad_id and saved_ads.user_id = '. $id));
    }

}

?>
