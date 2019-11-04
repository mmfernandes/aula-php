<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Novo Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	
		<p>
		<h2>Novo Usuário</h2>

		<?php include 'validar_msg.php'; ?>

		</p>
	<form action="cadastrar_user.php" method="post"> 

		<p>
			<label>Nome do usuário: </label><br>
			<input type="text" name="usuario">
		</p>
		<p>
			<label>Senha: </label><br>
			<input type="password" name="senha">
		</p>
		<p>
			<label>E-mail: </label><br>
			<input type="email" name="text">
		</p>
		<p>
			<button type="submit" class="btn btn-outline-info">Cadastrar</button>
			<button type="button" onclick="window.history.back()" class="btn btn-outline-dark">Cancelar</button>
		</p>
	</form>

	<?php 

	if(!empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['email']))
	{
		$usuario	=	$_POST['usuario'];
		$senha 		= 	$_POST['senha'];
		$email 		= 	$_POST['email']; 

		include 'conn.php'; 

		$sql = "INSERT INTO usuarios (nome_user, senha_user, email_user) VALUES ('$usuario', '$senha', '$email')";

		$result = mysqli_query($conn,$sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:login.php?msg=userCad');
		}
		else
		{
			header('location:cadastrar_user.php?msg=errorCad'); 
		}
	}

	 ?>

</body>
</html>