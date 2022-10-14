<?php
 include("content.php"); ?>

<!DOCTYPE html>
<head>
<?php include('head.php')?>
</head>

<body>

    <!-- Meniu juosta -->
<?php include('nav.php') ?>

    <!-- Menių juostoje puslapiai atskirai -->
<div class="container">
    <div class="row">
	    <div class="col-8" >
            <h1><?php generatePageName($_GET['page']);?></h1>
            
            <?php generatePage($_GET['page']);?> 
        </div>  
    </div>
    <h5><a href='index.php'> Grįžti atgal</a></h5>
</div>

<!-- Footer juosta -->
<?php include('footer.php') ?>
</body>



