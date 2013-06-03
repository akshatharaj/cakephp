<h2> Welcome! 

<?php 
 if( $this->Session->read('User') )
      echo $this->Session->read('User')['User']['first_name'];
 else
      echo 'Guest';

?> 

</h2>
