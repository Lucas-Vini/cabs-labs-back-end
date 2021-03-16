<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php include_once('head.php');	?>
	</head>
	<body>
	<head>
		<!--Required meta tags, Bootstrap CSS, icons and title-->
		<?php include_once('head.php');	?>
	</head>
	<body>
		<!--Header and navigation bar-->
		<?php include_once('header_and_navbar.php'); ?>
		<script type="text/javascript">
			document.getElementById('contact').className += " active"
		</script><!--End of header and navigation bar-->

		<!--Contact form-->
		<div class="container mt-5">
			<div class="row">

				<h2 class="text-center">Contato</h2>

				<form class="d-grid gap-3 col-10 col-sm-8 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-2 offset-lg-3 shadow-lg p-2" action="email.php" method="post">

					<div class="form-group">
						
						<div>						
							<label for="email">Email (caso queira ser respondido):</label>
							<input type="text" name=""  class="form-control">
						</div>

						<div>
							<label for="mensagem">Mensagem:</label>
							<textarea  class="form-control"></textarea>							
						</div>

						<br>
					</div>
					<input class="btn btn-outline-danger" type="submit" name="" value="Enviar">
					
				</form>
		
			</div>
		</div><!--End of contact form-->


		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>