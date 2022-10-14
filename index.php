<?php include('head.php')?>


<body>

<!-- Meniu juosta -->
<?php include('nav.php') ?>

<!-- Home puslapis titulinis -->
<div  class="container-md mt-3 border" >
	<div class="row">
		<div class="panel panel-primary">
			<!-- Default panel contents -->
			<div class="panel-heading"><h1> Universiteto naujienos</h1> </div>
			<?php include('news-list.php'); ?>
		</div>
	</div>	
</div>

<!-- Footer juosta -->
<?php include('footer.php') ?>
</body>