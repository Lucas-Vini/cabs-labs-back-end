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
			document.getElementById('secret-text').className += " active"
		</script><!--End of header and navigation bar-->

		<!--Início do texto secreto -->
		<?php
			session_start();
			if (isset($_SESSION['autenticado']) && $_SESSION){

				for ($i=0; $i < 20; $i++) { 
					?>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam quam ac placerat tristique. Suspendisse potenti. Aenean tortor est, aliquam et metus id, luctus sodales nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc vitae faucibus odio. Maecenas molestie commodo semper. Duis enim arcu, aliquam vitae nisl nec, semper dignissim nibh. 
						</p>
					<?php
				}
			}else{
				?>
				<br><br><br><br><br><br>
				<h1 class="display-4 mt-5 text-center">Desculpa, apenas pessoas autorizadas podem ver o texto secreto.</h1>
				<?php
			}
		?><!--Fim do texto secreto -->

		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>