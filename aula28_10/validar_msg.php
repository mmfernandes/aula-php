<?php

if(!empty($_GET['msg']))
{
	$msg = $_GET['msg'];

	if($msg == 'delSucess')
	{
		echo "<h3 class=\"alert alert-success\">
		Contato excluído com sucesso</h3>";
	}
	elseif ($msg =='delError')
	{
		echo"<h3 class=\"alert alert-danger\">
		Erro ao excluir contato</h3>"; 
	}

	else if($msg =='empty')
	{
		echo "<h3 class=\"alert alert-info\">Preencha todos os campos do formulário</h3>";
	}
	else if ($msg ='edtSuccess')
	{
		echo"<h3 class=\"alert alert-success\">Contato editado com sucesso </h3>";
	}
	else if($msg = 'edtError')
	{
		echo "<h3 class=\"alert alert-danger\">Erro ao editar contato </h3>";
	}
		
} 
 ?>