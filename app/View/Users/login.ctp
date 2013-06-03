<br/>
<h2> Please login to proceed </h2>
<br />
<?php

    echo $this->Form->create();
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');

?>
<br />
</h4> New user? Please proceed to the <?php echo $this->Html->link('registration', array('controller'=>'users', 'action'=>'add')); ?> page </h4>
