<?php 
	session_start();

	$users_and_passwords = array(
		array('user' => 'luffy', 'password' => 'monkey'),
		array('user' => 'zoro', 'password' => 'roronoa'),
		array('user' => 'nami', 'password' => 'nami'),
		array('user' => 'ussop', 'password' => 'ussop'),
		array('user' => 'sanji', 'password' => 'vinsmoke'),
		array('user' => 'orochimaru', 'password' => 'sama'),
		);

	$_SESSION['autenticado'] = False;
	foreach ($users_and_passwords as $user_and_password) {
		if ($user_and_password['user'] == $_POST['user'] and $user_and_password['password'] == $_POST['password']){
			$_SESSION['autenticado'] = True;
			$_SESSION['user'] = $user_and_password['user'];
			break;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

		if($_SESSION['autenticado']){
			header('Location: index.php?login=sucesso');
		}else{
			header('Location: index.php?login=erro');
		}

		?>
	</body>
</html>