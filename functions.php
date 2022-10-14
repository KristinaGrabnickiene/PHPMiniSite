<?php
include("content.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(empty($_GET['page'])) {
	$_GET['page'] = 1;
}

// funkcija meniu juostai
function generateMenu() {
	
	global $puslapiai;
	
	foreach($puslapiai as $key => $puslapis) {
		echo "<a class='nav-link active' href='pages.php?page=" .  $key . "'>".  $puslapis["name"] . "</a>";
	}
}

// funkcija gauti puslapio pavadinimą
function generatePageName($number) {
	
	global $puslapiai;
	
	foreach($puslapiai as $key => $puslapis) {
		if ($number == $key){
			echo   $puslapis["name"] ;
		} 
	}

}

// funkcija gauti naujienas
function generateNewsList() {
	
	global $naujienos;
	foreach($naujienos as $key => $naujiena) {
		echo  "<br>" .  $key. "<br> <a class='link' href='news.php?page=" .  $key . "'>".  $naujiena["name"] . "</a>";
	}

}

// funkcija spausdinti page puslapio turinį
function generatePage($number){

	global $puslapiai;
	foreach($puslapiai as $key => $puslapis):?>
	 	<?php if ($number == $key) :?>
		<div class="container" id="content" tabindex="-1">
			<div class="row">
				<div class="panel panel-primary">
				<h5><?php echo $puslapis['text']; ?> </h5>
				<img src= " <?php echo $puslapis['image']; ?>" >
				</div>
			</div>
		</div>	
		<?php endif ?>
	<?php endforeach ?>
<?php } ?>


