<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>the-nerd | Cake Basics Templates</title>

    <?php echo $this->Html->css('styles'); ?>


</head>
<body class="centered">

  <div id="banner">
    <?php echo $this->Html->image('banner.png'); ?>
  </div>

<nav id="navbar">
    <ul>
        <li><?php echo $this->Html->link('Home', array('controller'=>'home', 'action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('View Ads', array('controller'=>'ads', 'action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('Post an Ad', array('controller'=>'ads', 'action'=>'add')); ?></li>
        <li><?php echo $this->Html->link('View my Saved Ads', array('controller'=>'Savedads', 'action'=>'index')); ?></li>
        <?php if( $this->Session->read('User') == null): ?>
            <li><?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?></li>
        <?php endif; ?>
        <?php if( !$this->Session->read('User') == null): ?>
            <li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?></li>
        <?php endif; ?>
    </ul>
</nav>

<section id="middle">

    <article id="main">
        <?php echo $this->fetch('content'); ?>
    </article>

    <!-- make the middle region's background color expand -->
    <div class="clear"></div>

</section>

<footer id="footer">
    <h5> Developed as part of coursework for COSC 630 by Akshatha Raj (araj0@frostburg.edu) <h5>
</footer>

</body>
</html> 
