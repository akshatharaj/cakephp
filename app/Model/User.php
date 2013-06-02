<?php

class User extends AppModel {

    public $validate = array(
        'first_name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your first name'
        ),
        'last_name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your last name'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Please enter a valid email'
        ),
        'password' => array(
            'rule' => array('between', 5, 15),
            'message' => 'Please enter password between 5 and 15 characters'
        )
    );

}

?>
