<?php


class BaseController extends AppController{

    public function beforeFilter(){
        parent::beforeFilter();

        if( $this->request->action != 'login' && !$this->Session->check('User') ){
            $this->Session->setFlash('Please login or sign up to access the site');
            $this->redirect(array(
                'controller' => 'users',
                'action' => 'login'
            ));
        }
    }

}


?>


