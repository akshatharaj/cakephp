<div class="listing">

  <h2> Listing of Saved ads for <?php echo $user; ?> </h3>
  <?php foreach($ads as $ad): ?>

  <h4> Posted by <?php
      echo $users->find('first', array( 'condition' => array( 'id' => $ad['ads']['user_id'])))['User']['email'];?>
      on <?php echo $ad['ads']['created']; ?>  </h4>

  <p> A <?php echo $ad['ads']['instrument_type']; ?> available for <?php echo $ad['ads']['availability']; ?> </p>
  <p> <b> Size: </b> <?php echo $ad['ads']['size']; ?> </p>
  <p> <b> Maker: </b> <?php echo $ad['ads']['maker']; ?> </p>
  <p> <b> Price: </b> <?php echo $ad['ads']['price']; ?> </p>
  <p> <b> Comments: </b> <?php echo $ad['ads']['comments']; ?> </p>
  <hr>
  <?php endforeach ?>
</div>

