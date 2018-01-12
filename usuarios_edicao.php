<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Usuário</title>
	
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
						<li><a href="usuarios_listar.php">Listar</a></li>
						<li  class="active"><a href="usuarios_edicao.php">Cadastrar</a></li>
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
		<h1>Cadastro de Usuários</h1>

		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			<p> Senha muito curta</p>
		</div>
		<!-- [FIM] ERRO -->


		<form action="" method="post">
			<!-- NOME -->
			<div class="form-group">
				<label for="campo-nome">Nome:</label>
				<input type="text" class="form-control" name="nome" id="campo-nome">
			</div>
				
			<!-- EMAIL -->
			<div class="form-group">
				<label for="campo-email">Email:</label>
				<input type="email" class="form-control" name="email" id="campo-email">
			</div>

			<!-- SENHA -->
			<div class="form-group">
				<label for="campo-senha">Senha:</label>
				<input type="password" class="form-control" name="senha" id="campo-senha">
			</div>

			<!-- CONFIRMAR SENHA -->
			<div class="form-group">
				<label for="campo-senha2">Confirmar Senha:</label>
				<input type="password" class="form-control" name="senha2" id="campo-senha2">
			</div>
				
			<!-- NÍVEL -->
			<div class="form-group">
				<label for="campo-nivel">Nível:</label>
				<select class="form-control" name="nivel" id="campo-nivel">
					<option value="1">Administrador</option>
					<option value="2">Usuário</option>
				</select>
			</div>
			
			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
	</div>
	<br/>
</body>
</html>