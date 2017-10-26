<?php
session_start();
require(__DIR__.'/classes/UsuarioDAO.php');

$usuarioDAO = new UsuarioDAO;

$email = $_POST['email'] ?? false;

if (isset($_GET['erro'])) {
	$erro = 'É preciso estar logado';
}

if ($email != false) {
	$senha = $_POST['senha'] ?? false;
	$usuario = $usuarioDAO->login($email, $senha);

	if (!empty($usuario)) {
		
		$_SESSION['nome'] = $usuario['nome'];

		header("Location: index.php");
		die;
	} else {
		$erro = 'Email ou Senha incorreta';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
			background-image: url('assets/img/background.jpg');
		}

		#login {
			color: white;
			position: absolute;
			top: 25%;
			left: 25%;
			width: 50%;
		}

	</style>
</head>
<body>

	<div id="login">
			<h1>Login</h1>

				<?php if (isset($erro)): ?>
				<!-- LOGIN ou SENHA INCORRETA -->
				<div class="alert alert-danger">
					<strong>Erro!</strong> <?=$erro?>
				</div>
				<!-- FIM [LOGIN OU SENHA INCORRETA] -->
				<?php endif; ?>


			<form action="" method="post">
				
			  	<div class="form-group">
			    	<label for="campo-email">Email:</label>
			    	<input type="email" name="email" class="form-control" id="campo-email">
			  	</div>

			  	<div class="form-group">
			    	<label for="campo-senha">Senha:</label>
			    	<input type="password" name="senha" class="form-control" id="campo-senha">
			  	</div>
  				
  				<button type="submit" class="btn btn-default">Logar	</button>				
			</form>

	</div>
</body>
</html>