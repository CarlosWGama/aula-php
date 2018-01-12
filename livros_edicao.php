<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Livros</title>
	
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
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Livros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="livros_listar.php">Listar</a></li>
						<li class="active"><a href="livros_edicao.php">Cadastrar</a></li>
					</ul>
				</li> 

				<!-- SEÇÃO USUARIOS -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="usuarios_listar.php">Listar</a></li>
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
	
	<div class="container">
		<h1>Cadastro de Livros</h1>

		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			<p> Informe o título do livro</p>
		</div>
		<!-- [FIM] ERRO -->


		<form action="" method="post">
			<!-- ISBN -->
			<div class="form-group">
				<label for="campo-isbn">ISBN:</label>
				<input type="number" class="form-control" id="campo-isbn">
			</div>
			
			<!-- TITULO -->
			<div class="form-group">
				<label for="campo-titulo">Título:</label>
				<input type="text" class="form-control" id="campo-titulo">
			</div>
				
			<!-- AUTOR -->
			<div class="form-group">
				<label for="campo-email">Autor:</label>
				<input type="email" class="form-control" id="campo-email">
			</div>

			<!-- CATEGORIA -->
			<div class="form-group">
				<label for="campo-categoria">Categoria:</label>
				<select class="form-control" name="categoria" id="campo-categoria">
					<option value="1">Terror</option>
					<option value="2">Drama</option>
					<option value="3">Romance</option>
					<option value="4">Ficção Científica</option>
					<option value="5">Pintura</option>
				</select>
			</div>
				
			<!-- RESUMO -->
			<div class="form-group">
				<label for="campo-resumo">RESUMO:</label>
				<textarea class="form-control" id="campo-resumo" name="resumo"></textarea>
			</div>
				
			<!-- RESUMO -->
			<div class="form-group">
				<label for="campo-capa">Capa:</label>
				<input type="file" id="campo-capa" name="capa"/>

				<br/>
				<img src="http://lorempixel.com/200/200" class="img-rounded">
			</div>

			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
	</div>
	<br/>
</body>
</html>