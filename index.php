<?php require_once('header.php');?>

<div class="container">
	<?php 
		if(!isset($_GET["page"]))
			require_once('home.php');
		else
			require_once($_GET['page'].".php"); 
	?>
</div>

<?php require_once('footer.php');?>
