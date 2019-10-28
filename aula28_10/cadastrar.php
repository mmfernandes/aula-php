<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">

	<?php include 'menu.php'; ?>

	<h1>Novo contato:</h1>

	<form action="cadastrar.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome">
		</p>

		<p>
			<label>Fone:</label><br>
			<input type="phone" name="fone">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>

		<p>
			<button type="submit" class="btn btn-outline-info">Salvar</button>
		</p>

	</form>

	<?php  

	// verificar se os dados do form foram preenchidos
	if(!empty($_POST['nome']) && !empty($_POST['fone']) && !empty($_POST['email']))
	{
		// armazenar dados em variaveis
		$nome 	= $_POST['nome'];
		$fone 	= $_POST['fone'];
		$email 	= $_POST['email'];

		// incluir arquivo de conexão
		include 'conn.php';

		// criar o comando sql para executar no bd
		$sql = "INSERT INTO contatos 
		(nome_contato, fone_contato, email_contato)
		VALUES ('$nome', '$fone', '$email')";

		// executar no banco de dados conectado, o
		// comando sql criado acima
		$result = mysqli_query($conn, $sql);

		// verificar se o comando sql foi bem sucedido
		// (se foi, ele 'afetou linhas no mysql')
		if(mysqli_affected_rows($conn) > 0)
		{
			echo "<h3 class=\"alert alert-success\">Contato cadastrado com sucesso!</h3>";
		}
		else
		{
			echo '<h3 class="alert alert-danger">Erro ao cadastrar contato: ' . mysqli_error($conn) . '</h3>';
		}

	}
	?>

</body>
</html>
