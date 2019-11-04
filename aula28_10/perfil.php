<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Meu Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">

	<?php include 'menu.php';  ?>

	<p>
		<h2>Meu Perfil</h2>
		<?php include 'validar_msg.php'; ?>
	</p>
	<form action="perfil.php" method="post">
	
	<p>
		<input type="hidden" name="id"
		value="<?php echo$_SESSION['id_user']; ?>">
	</p>
	<p>	
		<label>Nome de usuário:</label><br>
		<input type="text" name="usuario"
		value="<?php echo$_SESSION['nome_user']; ?>">
	</p>
	<p>	
		<label>Senha:</label><br>
		<input type="text" name="usuario"
		value="<?php echo$_SESSION['senha_user']; ?>">
	</p>
	<p>	
		<label>Email:</label><br>
		<input type="email" name="usuario"
		value="<?php echo$_SESSION['email_user']; ?>">
	</p>
	<p>
		<button type="submit" class="btn btn-outline-success">Salvar
		</button>
	</p>
	</form>

	<<?php 

	if(!empty($_POST['id']) && !empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['email']))
	{
		$id 		= $_POST['id'];
		$usuario 	= $_POST['usuario'];
		$senha 		= $_POST['senha'];
		$email 		= $_POST['emial']; 

		$result = mysqli_query($conn,$sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			$_SESSION['nome_user']  = $usuario;
			$_SESSION['senha_user'] = $senha; 
			$_SESSION['email_user'] = $email; 
						header('location:perfil.php?msg=userOk'); 
		}
		else
		{
			header('location:perfil.php?msg=userError'); 
		}
	}



	 ?>

</body>
</html>