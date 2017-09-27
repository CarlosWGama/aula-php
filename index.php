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
      	<li><a href="login.php?logout=1"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
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
			      	<tr>
			        	<td>1</td>
			        	<td>Carlos</td>
			        	<td>carlos@gmail.com</td>
			        	<td>
			        		<a href="edicao.php">Editar</a>
			        		<a href="">Excluir</a>
			        	</td>
			      	</tr>
			      	<tr>
			        	<td>2</td>
			        	<td>Mylana</td>
			        	<td>mylana@gmail.com</td>
			      		<td>
			        		<a href="edicao.php">Editar</a>
			        		<a href="">Excluir</a>
			        	</td>
			      	</tr>	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
	</div>
</body>
</html>