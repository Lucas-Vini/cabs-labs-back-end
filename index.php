<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Requeired meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS --> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link href="css/estilo.css" rel="stylesheet">

		<!-- icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

		<title>CabsLabs</title>
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
			<div class="collapse navbar-collapse justify-content-center" id="menu-target">
				<ul class="navbar-nav nav-pills">
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2 active" href="">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="passeio.html">Passeio aleatório</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="">Crowd
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="">Jogos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="">Contato</a>
					</li>
				</ul>
			</div>
		</nav><!-- Fim da barra de navegação-->

		<!-- Conteúdo principal - Login -->
		<div class="container mt-5">
			<div class="row">
				<form class="d-grid gap-2 col-10 col-sm-8 col-md-6 col-lg-4 offset-1 offset-sm-2 offset-md-3 offset-lg-4 shadow-lg" action="login.php" method="post">
					<h1 class="text-center">Autenticação</h1>

					<div class="input-group">
						<i class="bi bi-person input-group-text text-danger"></i>
						<input class="form-control" type="text" name="user" placeholder="Digite seu nome de usuário">
					</div>
					<div class="input-group">
						<i class="bi bi-key input-group-text text-danger"></i>
						<input class="form-control" type="password" name="password" placeholder="Digite sua senha">
					</div>
					<?php
						if (isset($_GET['login'])){
							if($_GET['login']=='erro'){

							?>
							
							<div class="alert alert-danger">Usuário ou senha incorreto</div>
							
							<?php }
						}
					?>
					<button class="btn btn-outline-danger" type="submit">Entrar</button>
					<h5 class="text-center">ou</h5>
					<button class="btn btn-outline-danger" type="button">Cadastrar</button>		
				</form>
			</div>
		</div><!-- Fim do conteúdo principal - Login -->


		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>