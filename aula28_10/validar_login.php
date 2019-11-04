<?php 
if(empty($_POST['usuario']) || empty($_POST['senha']))
{
	//SE USER OU SENHA ESTIVER EM BRANCO REDIRECIONA O USUARIO P PG DE LOGIN
	header('location:login.php?msg=loginEmpty'); 
}
else
{
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha']; 

	include 'conn.php'; 

	$sql = "SELECT * FROM usuarios WHERE 
	nome_user 	= 	'$usuario' AND
	senha_user	= 	'$senha' "; 
	$result = mysqli_query($conn,$sql); 

	if(mysqli_affected_rows($conn) > 0)
	{
		//transformar em um array associativo 
		$login = mysqli_fetch_assoc($result); 

		session_start(); 

		$_SESSION['id_user'] 	= $login['id_user'];
		$_SESSION['nome_user'] 	= $login['nome_user'];
		$_SESSION['senha_user'] = $login['senha_user'];
		$_SESSION['email_user']	= $login['email_user'];

	//redirecionar para pagina destino

		header('location:index.php');
	}
	else
	{
		header('location:login.php?msg=loginError'); 
	}
}







 ?>