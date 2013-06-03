
<br/>
<h2> Welcome! 
<?php 
 if( $this->Session->read('User') )
      echo $this->Session->read('User')['User']['first_name'];
 else
      echo 'Guest';

?> 
</h2>
<br/>
<p class="home_text"> 

Our goal is to provide a platform where you can see what our member musical instruments' 
sellers have to offer, or, provide one where you can sell your own. We hope you find the 
experiernce on our website very pleasing. 
<?php echo $this->Html->link('View all available ad listings', array('controller' => 'ads', 'action' => 'index')) ?> 
by clicking on the View Ads navigation link at the top. You can save ads that interest you 
as a favorite so you can revisit it later. Happy Browsing!

</p>
