<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Entrar no Sistema</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">

	<?php include 'validar_msg.php'; ?>


	<p>
		<h2>Sistema Agenda</h2>
		<h3>Informe seus dados de acesso: </h3>
	</p>
	<form method="post" action ="validar_login.php;"> 
	<p>
		<label>Usúario: </label><br>
		<input type="text" name="usuario">
	</p>
	<p>
		<label>Senha: </label><br>
		<input type="password" name="senha">
	</p>
	<p>
		<button type="submit" class="btn btn-outline-info">Entrar</button>
		<button type="submit" class="btn btn-outline-dark">Cadastre-se</button>
	</p>
	</form>


</body>
</html>