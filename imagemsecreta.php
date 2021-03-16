<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--Required meta tags, Bootstrap CSS, icons and title-->
		<?php include_once('head.php');	?>
	</head>
	<body>
		<!--Header and navigation bar-->
		<?php include_once('header_and_navbar.php'); ?>
		<script type="text/javascript">
			document.getElementById('secret-image').className += " active"
		</script><!--End of header and navigation bar-->

		<!-- Imagem secreta -->
		<?php 
			session_start();
			if (isset($_SESSION['autenticado']) && $_SESSION['autenticado']){
				?>
				<img style="width: 100%" src="images/imagemsecreta.jpeg">
				<?php
			}else{
				?>
				<br><br><br><br><br><br>
				<h1 class="display-4 mt-5 text-center">Desculpa, apenas pessoas autorizadas podem ver a imagem secreto.</h1>
				<?php
			}

		?><!-- Fim da imagem secreta -->


		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>