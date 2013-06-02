<h2> Sign up for an account </h2>

<?php

  echo $this->Form->create();
  echo $this->Form->input('first_name');
  echo $this->Form->input('last_name');
  echo $this->Form->input('phone');
  echo $this->Form->input('email');
  echo $this->Form->input('password');
  echo $this->Form->end('Sign up');

?>
