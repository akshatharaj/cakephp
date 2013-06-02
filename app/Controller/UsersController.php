<?php

class UsersController extends AppController {
    public function index(){
        $users = $this->User->find('all');
        $this->set('users', $users);
    }

    public function add(){
        if ( $this->request->is('post') ){
            $this->User->save( $this->request->data );
        }
    }

}

?>

