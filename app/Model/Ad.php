<?php

class Ad extends AppModel {

    public $validate = array(
        'instrument_type' => array(
            'rule' => '/^[a-zA-Z]{3,}$/i',
            'message' => 'Please enter the type of instrument, min 3 characters'
        ),
        'year' => array(
            'rule' => '/^[0-9]{4}$/i',
            'message' => 'Please enter 4 digit year instrument was made'
        ),
        'maker' => array(
            'rule' => 'alphaNumeric',
            'message' => 'Please enter the name of the maker'
        ),
        'price' => array(
            'rule' => 'alphaNumeric',
            'message' => 'Please enter price, alphanumeric only'
        )

    );


}

?>
