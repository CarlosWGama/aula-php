<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Usuário</title>
	
	<!-- JQUERY -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>	
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
		
				<!-- SEÇÃO LIVROS -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Livros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="livros_listar.php">Listar</a></li>
						<li><a href="livros_edicao.php">Cadastrar</a></li>
					</ul>
				</li> 

				<!-- SEÇÃO USUARIOS -->
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="usuarios_listar.php">Listar</a></li>
						<li><a href="usuarios_edicao.php">Cadastrar</a></li>
					</ul>
				</li>	
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php?logout=1"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
			</ul>
		</div>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<!-- Conteudo principal -->
	<div class="container">
			<h1>Usuários</h1>

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
			        		<a href="usuarios_edicao.php">Editar</a>
			        		<a href="">Excluir</a>
			        	</td>
			      	</tr>
			      	<tr>
			        	<td>2</td>
			        	<td>Mylana</td>
			        	<td>mylana@gmail.com</td>
			      		<td>
			        		<a href="usuarios_edicao.php">Editar</a>
			        		<a href="">Excluir</a>
			        	</td>
			      	</tr>	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
	</div>
</body>
</html>