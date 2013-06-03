<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>the-nerd | Cake Basics Templates</title>

    <?php echo $this->Html->css('styles'); ?>


</head>
<body>

<header id="header">
    <h1>Musicmart</h1>
</header>

<nav id="navbar">
    <ul>
        <li><?php echo $this->Html->link('Home', array('controller'=>'home', 'action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('View Ads', array('controller'=>'ads', 'action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('Post an Ad', array('controller'=>'ads', 'action'=>'add')); ?></li>
        <li><?php echo $this->Html->link('View my Saved Ads', array('controller'=>'Savedads', 'action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?></li>
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
    <h6>Copyright © 2010 Lorem Ipsum Awesome.</h6>
</footer>

</body>
</html> 
