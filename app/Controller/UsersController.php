<?php

App::uses('Security', 'Utility');
class UsersController extends AppController {

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function login() {
        if( $this->request->is('post') ){
            $user = $this->User->findByEmailAndPassword(
                $this->request->data('User.email'),
                Security::hash( $this->request->data('User.password'), 'sha1', true)
            );
            if( $user ) {
                $this->Session->setFlash('Login successful');
                $this->Session->write('User', $user);
                $this->redirect(array(
                    'controller' => 'home',
                    'action' => 'index'
                ));
            }
            $this->Session->setFlash(__('Invalid username or password'));
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->redirect(array('controller' => 'home', 'action' => 'index'));
    }

}

?>

