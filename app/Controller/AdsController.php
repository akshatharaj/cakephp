<?php

class AdsController extends AppController {

    public function add(){
        if( $this->request->is('post') ){
            $this->Ad->save( $this->request->data);
        }

    }

    public function index(){
        $this->loadModel('User');
        $this->set('ads', $this->Ad->find('all', array( 'order' => array('id DESC'))));
        $this->set('users', $this->User);
    }
}

?>
