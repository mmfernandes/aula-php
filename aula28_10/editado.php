<?php
if (empty($_POST['id']) || empty($_POST['nome']) || empty($_POST['fone']) || empty($_POST['email']))
{
	header('location:gerenciar.php?msg=empty');
}

else
{

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$fone = $_POST['fone'];
	$email = $_POST['email'];

	include 'conn.php';

	$sql = "UPDATE contatos SET 
	nome_contato = '$nome',
	fone_contato = '$fone',
	email_contato = '$email'
	WHERE id_contato = $id"; 

	$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) >= 0)
		{
			header('location:gerenciar.php?msg=edtSucess'); 

		}
		else
		{
			header('location:gerenciar.php?msg=edtError'); 
		}
}

?> 