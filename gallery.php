<?php 
include ('content.php');
include ('head.php');
?>

<body>

    <!-- Meniu juosta -->
<?php include('nav.php') ?>

    <!-- Galreija atskiras puslapis -->
<div class="container">
        <h2> Galerija </h2>
    <div class="row">
	    <div class="col-10" >
        <?php
            foreach($puslapiai as $image) : ?>
            <img class="rounded" alt="Cinque Terre" width="304" height="236" src="<?php echo $image['image']; ?>">
            <?php endforeach; ?>
        </div>  
    </div>
</div>

<!-- Footer juosta -->
<?php include('footer.php') ?>
</body>