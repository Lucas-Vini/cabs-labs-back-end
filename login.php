<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

			$users_and_passwords = array(
				array('user' => 'cabs', 'password' => 'labs'),
				array('user' => 'teste', 'password' => 'senha'),
			);

			$logado = False;
			foreach ($users_and_passwords as $user_and_password) {
				if ($user_and_password['user'] == $_POST['user'] and $user_and_password['password'] == $_POST['password']){
					$logado = True;
					break;
				}
			}

			if($logado){
				print_r('Parabéns, você está logado!');
			}else{
				header('Location: index.php?login=erro');
			}

		?>
	</body>
</html>