<h2> Create an ad </h2>
<br />
<?php

    echo $this->Form->create();
    echo $this->Form->hidden('user_id', array('value' => $this->Session->read('User')['User']['id']));
    echo $this->Form->input('instrument_type'); 

    echo $this->Form->input('year', array('type' => 'text'));

    echo $this->Form->input('size');
    echo $this->Form->input('maker');
    $availability = array('Sale only' => 'Sale Only', 'Rent only' => 'Rent Only', 'Either Sale or Rent' => 'Either');
    echo $this->Form->input('availability', array('options' => $availability, 'default' => 'Either Sale or Rent'));
    echo $this->Form->input('price');
    echo $this->Form->input('comments'); 
    echo $this->Form->end('Create Ad');

?>
