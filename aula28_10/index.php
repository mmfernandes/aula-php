<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home - Contatos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">

	<?php include 'menu.php'; ?>
	<h1>Lista de contatos</h1>

	<?php  

	// verificar se há registros salvos no bd:
	include 'conn.php';

	$sql = "SELECT * FROM contatos";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		// mostrar registros

		// registra array na memória
		$linha_atual = array();

		/*
		enquanto houver linhas na matriz:
			copie uma linha de cada vez para o array 'linha_atual'.
			A cada passagem do laço 'while' o php irá copiar todos os dados (incluindo o nome das colunas) para o array associativo 'linha_atual'
		*/
		while($linha_atual = mysqli_fetch_assoc($result))
		{
			// com os dados copiados, mostramos na tela:

			echo "<p>";
		
			foreach ($linha_atual as $indice => $valor)
			{

				$indice = str_replace("_contato", "", $indice);

				echo "<b>" . ucfirst($indice) . "</b>: " . 
				$valor . "<br>";
			}

			echo "</p>";

		}

	}
	else if(mysqli_affected_rows($conn) == 0)
	{
		echo '<h3>Não há contatos cadastrados</h3>';
	}
	else
	{ // se o valor retornado for -1, há erro no comando sql

		echo "<h3>Erro ao buscar contatos: " . mysqli_error($conn) . "</h3>";
	}



	?>

</body>
</html>