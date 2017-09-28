<?php
session_start();

//Não está logado
if (!isset($_SESSION['nome'])) {
		header('Location: login.php?erro=1');
		exit();
}

$posicao = $_GET['id'] ?? false;

//Cadastro
$erros = [];
$nome = '';
$email = '';
$senha = '';
if (isset($_POST['edicao'])) {
		$nome = $_POST['nome'] ?? '';
		$email = $_POST['email'] ?? '';
		$senha = $_POST['senha'] ?? '';


		if (empty($nome)) $erros[] = 'Nome obrigatório';
		if (empty($email)) $erros[] = 'Email obrigatório';
		if (empty($senha)) $erros[] = 'Senha obrigatória';

		if (count($erros) == 0) {
			//Cadastra
			if ($posicao === false) {
				$_SESSION['usuarios'][] = [
						'nome' 		=> $nome,
						'email'		=> $email,
						'senha'		=> $senha,
						'id'		=> 1
				];
			} else {
				//Edicao
				$_SESSION['usuarios'][$posicao] = [
						'nome' 		=> $nome,
						'email'		=> $email,
						'senha'		=> $senha
				];
			}
			header('Location: index.php');
			exit();
		}
}

if ($posicao !== false) {
		$nome = $_SESSION['usuarios'][$posicao]['nome'];
		$email = $_SESSION['usuarios'][$posicao]['email'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <ul class="nav navbar-nav">
	    <li><a href="index.php">Listar</a></li>
	    <li class="active"><a href="edicao.php">Inserir</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      </ul>
	</nav></nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
			<h1>Cadastro de Produto</h1>

			<?php if (count($erros) > 0): ?>
			<!-- ERRO NO CADASTRO -->
			<div class="alert alert-danger">
  				<strong>Erro!</strong>
  				<?php foreach($erros as $erro): ?>
  				<p> <?=$erros	?></p>
  				<?php endforeach;?>
			</div>
			<!-- [FIM] ERRO -->
			<?php endif; ?>


			<form action="" method="post">
				<input type="hidden" name="edicao" value="1"/>
				<div class="form-group">
					<label for="campo-nome">Nome:</label>
				    <input type="type" name="nome" class="form-control" id="campo-nome" value="<?=$nome?>">
				</div>
			  	
			  	<div class="form-group">
			    	<label for="campo-email">Email:</label>
			    	<input type="email" name="email" class="form-control" id="campo-email" value="<?=$email?>">
			  	</div>

			  	<div class="form-group">
			    	<label for="campo-senha">Senha:</label>
			    	<input type="password" name="senha" class="form-control" id="campo-senha">
			  	</div>
  				
  				<button type="submit" class="btn btn-default">Cadastrar</button>				
			</form>
	</div>
</body>
</html>