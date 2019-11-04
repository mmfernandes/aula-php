<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar - Contatos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">

	<?php include 'menu.php';
		  include 'validar_msg.php'; ?>
	<h1>Gerenciar contatos</h1>

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

	?>

	<table class="table table-striped">
		<tr>
			<th> ID #</th>
			<th> Nome</th>
			<th> Fone</th>
			<th> E-mail</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>


<?php

		while($linha_atual = mysqli_fetch_assoc($result))
		{
			// com os dados copiados, mostramos na tela:

			echo "<tr>";
		
			foreach ($linha_atual as $indice => $valor)
			{

				echo "<td>$valor</td>";
				//se o valor de indice for ID_contato:
				if($indice =='id_contato')
				{//if for
					//copiar o valor deste id pa a variavel 'id'
					$id = $valor; 
				}

			}//fim foreach

			echo "<td><a href=\"editar.php?id=$id\" class = \"btn btn-warning\"
			>Editar</a></td>";

			echo "<td><a href =\"deletar.php?id=$id\" class=\"btn btn-danger\"
			onclick=\"return confirm('Deseja excluir este contato?')\"
			>Deletar</a></td>";
			echo "</tr>";

		}//fim while

		//fechar tabela

		echo "</table>";

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