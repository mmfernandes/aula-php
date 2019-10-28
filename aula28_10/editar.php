<?php
if(empty($_GET['id']))
{
	header('location:gerenciar.php');
}
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Edição de Contatos</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body class ="container-fluid">

 	<?php include 'menu.php'; 

 	include 'conn.php';

 	$id = $_GET['id'];

 	$sql = "SELECT * FROM contatos WHERE id_contato = $id";

 	$result = mysqli_query($conn, $sql); 

 	if(mysqli_affected_rows($conn) > 0)
 	{
 		$contato = mysqli_fetch_assoc($result); 
	?> 

 	<h1>Editar Contato</h1>
 		<form action="editado.php" method="post">
 			<p>
 				<label>Nome:</label><br>
 				<input type="text" name="nome" value="<?php echo $contato['nome_contato']; ?>">
 			</p>
 			<p>
 				<label>Fone:</label><br>
 				<input type="phone" name="fone" value="<?php echo $contato['fone_contato']; ?>">
 			</p>
 			<p>
 				<label>Email:</label><br>
 				<input type="text" name="email" value="<?php echo $contato['email_contato']; ?>">
 			</p>
 			<p>
 				<input type="hidden" name="id"
 				value="<?php echo $contato['id_contato'] ?>">
 			</p>
 			<p>
 				<button type="submit" class="btn btn-outline-info">Salvar</button>
 				<button type="button" onclick="window.history.back()" class="btn btn-outline-dark">Cancelar</button>
 			</p>

 	<?php 
 	}
 	else
 	{
 		echo"<h3 class=\alert alert-info\" Não foi possível carregar o formulário de edição deste contato</h3>"; 
 	}




 	?>
 
 </body>
 </html>