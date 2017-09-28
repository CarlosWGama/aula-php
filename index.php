<?php
session_start();

//Não está logado
if (!isset($_SESSION['nome'])) {
		header('Location: login.php?erro=1');
		exit();
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
	    <li class="active"><a href="index.php">Listar</a></li>
	    <li><a href="edicao.php">Inserir</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      </ul>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->

	<!-- Conteudo principal -->
	<div class="container">
			<h1>Produtos</h1>

			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Nome</th>
			        <th>Email</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    <!-- DADOS -->
			    <tbody>
			    	<?php foreach($_SESSION['usuarios'] as $chave => $usuario): ?> 
			      	<tr>
			        	<td><?=$chave?></td>
			        	<td><?=$usuario['nome']?></td>
			        	<td><?=$usuario['email']?></td>
			        	<td>
			    			<a href="edicao.php?id=<?=$chave?>">Editar</a>
			    			<a href="excluir.php?id=<?=$chave?>">Excluir</a>
			        	</td>
			      	</tr>
			      	<?php endforeach; ?>
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
	</div>
</body>
</html>