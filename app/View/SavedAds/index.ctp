<div class="listing">

  <h2> Listing of Saved ads for <?php $user ?> </h3>

  <?php foreach($ads as $ad): ?>

  <h4> Posted by <?php
      echo $users->find('first', array( 'condition' => array( 'id' => $ad['Ad']['user_id'])))['User']['email'];?>
      on <?php echo $ad['Ad']['created']; ?>  </h4>

  <p> A <?php echo $ad['Ad']['instrument_type']; ?> available for <?php echo $ad['Ad']['availability']; ?> </p>
  <p> <b> Size: </b> <?php echo $ad['Ad']['size']; ?> </p>
  <p> <b> Maker: </b> <?php echo $ad['Ad']['maker']; ?> </p>
  <p> <b> Price: </b> <?php echo $ad['Ad']['price']; ?> </p>
  <p> <b> Comments: </b> <?php echo $ad['Ad']['comments']; ?> </p>
  <hr>
  <?php endforeach ?>
</div>

