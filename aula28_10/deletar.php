<?php

if(empty($_GET['id']))
{//1ºif
	//se estiver vazio o campo 'id', enviado GET:
	//redireciona o usuario para gerenciar 
	header('location:gerenciar.php');
}
else
{
	//receber id
	$id = $_GET['id'];
	//incluir arq de conexao

	include 'conn.php';
	$sql = "DELETE FROM contatos WHERE id_contato = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar.php?msg=delSucess');
	}
	else
	{
		header('location:gerencial.php?msg=delError');
	}
}

 
 ?>