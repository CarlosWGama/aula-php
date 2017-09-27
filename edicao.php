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
      	<li><a href="login.php?logout=1"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      </ul>
	</nav></nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
			<h1>Cadastro de Produto</h1>

			<!-- ERRO NO CADASTRO -->
			<div class="alert alert-danger">
  				<strong>Erro!</strong>
  				<p> Senha muito curta</p>
			</div>
			<!-- [FIM] ERRO -->


			<form action="" method="post">
				<div class="form-group">
					<label for="campo-nome">Nome:</label>
				    <input type="type" class="form-control" id="campo-nome">
				</div>
			  	
			  	<div class="form-group">
			    	<label for="campo-email">Email:</label>
			    	<input type="email" class="form-control" id="campo-email">
			  	</div>

			  	<div class="form-group">
			    	<label for="campo-senha">Senha:</label>
			    	<input type="password" class="form-control" id="campo-senha">
			  	</div>
  				
  				<button type="submit" class="btn btn-default">Cadastrar</button>				
			</form>
	</div>
</body>
</html>