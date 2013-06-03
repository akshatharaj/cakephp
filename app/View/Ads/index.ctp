
<div class="listing">

  <h3> <?php echo $this->Session->flash(); ?> </h3>
  <h2> Listing of ads </h2>

  <?php foreach($ads as $ad): ?>

  <h4> Posted by <?php 
      echo $users->find('first', array( 'condition' => array( 'id' => $ad['Ad']['user_id'])))['User']['email'];?>
      on <?php echo $ad['Ad']['created']; ?>  </h4> 

  <p> A <?php echo $ad['Ad']['instrument_type']; ?> available for <?php echo $ad['Ad']['availability']; ?> </p>
  <p> <b> Seller phone: </b> <?php echo $users->find('first', array( 'condition' => array( 'id' => $ad['Ad']['user_id'])))['User']['phone']; ?>  </p>
  <p> <b> Size: </b> <?php echo $ad['Ad']['size']; ?> </p>  
  <p> <b> Maker: </b> <?php echo $ad['Ad']['maker']; ?> </p> 
  <p> <b> Price: </b> <?php echo $ad['Ad']['price']; ?> </p>
  <p> <b> Comments: </b> <?php echo $ad['Ad']['comments']; ?> </p>
  <p class="save_for_later"> <?php echo $this->Html->link('Save ad for later', array('controller' => 'savedads', 'action' => 'add', '?' => array('user_id' => $ad['Ad']['user_id'], 'ad_id' => $ad['Ad']['id']))) ?>
  <hr>
  <?php endforeach ?>
</div>
