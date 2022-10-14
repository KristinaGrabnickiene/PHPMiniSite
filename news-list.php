<?php  
 include("content.php");

foreach ($naujienos as $key => $naujiena) :  ?>
	
<!-- Naujienų listas naudojamas atskirai puslapiuose -->
<div class="row">
	<h3><?php echo $key; ?></h3>
	<div class="col-5" >
			<img src="https://live.staticflickr.com/8480/8237726412_707b997013.jpg" width="250" height="150" >
		</div>
	<div class="col-5" > 
		<h2><a href="news.php?page=<?php echo $key; ?>"><?php echo $naujiena['name']; ?></a></h2>
		<p><?php echo $naujiena['description']; ?> </p>
	</div>
		
</div>

		
	
<?php endforeach ?>