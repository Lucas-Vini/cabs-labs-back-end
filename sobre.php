<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php include_once('head.php');	?>
	</head>
	<body>
		<!-- Cabeçalho com logo -->
		<header class="bg-dark p-4">
			<h2 class="text-light text-center">Cabs<span class="text-danger">Labs</span></h2>
		</header><!-- Fim do cabeçalho com logo -->

		<!--Barra de navegação-->
		<nav class="sticky-top navbar navbar-dark bg-danger navbar-expand-md p-2">
			<button class="navbar-toggler mx-1 my-2" data-toggle="collapse" data-target="#menu-target">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu-target">
				<ul class="navbar-nav nav-pills">
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="textosecreto.php">Texto secreto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="imagemsecreta.php">Imagem secreta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2 active" href="">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="contato.php">Contato</a>
					</li>
				</ul>
			</div>
			<a class="btn btn-danger px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="logoff.php">SAIR</a>
		</nav><!-- Fim da barra de navegação-->
			<!-- Sobre -->
			<article">
				<h2 class="text-center pt-5">Sobre</h2>
				<p class="text-center pt-3">Este site foi feito principalmente para eu estudar um pouco de back-end com php. Mas também para revisar um pouco de front-end com Bootstrap e JavaScript.</p>
			</article><!-- Fim do sobre -->


		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>