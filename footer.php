
<?php 
?>

<!-- Suformuota footer juosta naudojama puslapio gale -->
<div class="container p-5 my-5 bg-dark text-white">
    <div class="row">
        <div class="col-6"
        <h3>Naudingos puslapio nuorodos</h3>
            <?php generateMenu();?>
                <li>
                <a class='nav-link active' href='gallery.php'> Galerija</a>
                </li>
        </div>
        <div class="col-6"
        <h3>Naujausios naujienos</h3>
            <?php generateNewsList(); ?>
        </div>
    </div>

</div>