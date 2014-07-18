<?php require_once('header.php');?>

<div class="container">
	<?php
		if(!isset($_GET["page"]))
			require_once('home.php');

        elseif(file_exists($_GET['page'].".php"))
            require_once($_GET['page'].".php");
        else
            echo "<h1>Pagina não encontrada</h1>";
	?>
</div>

<?php require_once('footer.php');?>
