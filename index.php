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
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2 active" href="">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="textosecreto.php">Texto secreto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="imagemsecreta.php">Imagem secreta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="sobre.php">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="contato.php">Contato</a>
					</li>
				</ul>
			</div>
			<a class="btn btn-danger px-1 px-md-3 mt-1 mt-md-0 mx-md-2" href="logoff.php">SAIR</a>

		</nav><!-- Fim da barra de navegação-->
		<!-- Conteúdo principal - Login -->
		<?php
			session_start();
			if (isset($_SESSION['autenticado']) && $_SESSION['autenticado']){
				print_r(('<br><br><br><br><br><br><h1 class="display-4 mt-5 text-center">Olá, ' . ucfirst($_SESSION['user']) . '! Seja bem-vindo ao CabsLabs</h1>'));
				}else{
					?>
					<div class="container mt-5">
						<div class="row">
							<form class="d-grid gap-2 col-10 col-sm-8 col-md-6 col-lg-4 offset-1 offset-sm-2 offset-md-3 offset-lg-4 p-3 shadow-lg" action="login.php" method="post">
								<h1 class="text-center">Autenticação</h1>
								<?php
									if (isset($_GET['logoff'])){
										if($_GET['logoff']=='sucesso'){

										?>
										
										<div class="alert alert-success">
										Logoff realizado com sucesso!
										</div>
										
										<?php }
									}
								?>

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

								<!-- Button trigger modal de cadastro -->
								<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
								  Cadastrar
								</button>

							</form>

							<!-- Modal de cadastro-->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
							        <button type="button" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        
							      	<form>
							      		<label>Usuário</label>
							      		<input class="form-control" type="text" name="user-sign-up" placeholder="Escolha seu nome de usuário">
							      		<label>Senha</label>
							      		<input class="form-control" type="password" name="password-sign-up" placeholder="Escolha sua senha">
							      		<label>Digite sua senha novamente</label>
							      		<input class="form-control" type="password" name="password-again" placeholder="Digite a senha escolhida novamente">
							      	</form>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							        <button type="button" class="btn btn-danger">Cadastrar</button>
							      </div>
							    </div>
							  </div>
							</div>

						</div>
					</div>
				<?php }
		?><!-- Fim do conteúdo principal - Login -->

		<!-- Bootstrap JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>