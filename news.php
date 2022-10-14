<?php
include('head.php');
include("content.php"); ?>


<body>
	
<!-- Meniu juosta -->
<?php include('nav.php') ?>

<!-- Vienos naujienos puslapis -->
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
			<!-- Default panel contents -->
			<div class="panel-heading"><h1><?php echo $naujienos[$_GET['page']]['name']; ?></h1> </div>
			<p> Autorius: <?php echo $naujienos[$_GET['page']]['author']; ?></p>
			<p><?php echo $naujienos[$_GET['page']]['text']; ?> </p>
			<h3><a href='index.php'> Grįžti atgal</a></h3>
		</div>
	</div>	
</div>

<!-- Footer juosta -->
<?php include('footer.php') ?>
</body>
</html>