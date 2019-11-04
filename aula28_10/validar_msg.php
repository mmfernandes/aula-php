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
	else if ($msg =='edtSuccess')
	{
		echo"<h3 class=\"alert alert-success\">Contato editado com sucesso </h3>";
	}
	else if($msg == 'edtError')
	{
		echo "<h3 class=\"alert alert-danger\">Erro ao editar contato </h3>";
	}
	else if ($msg == 'loginEmpty')
	{
		echo "<h3 class=\"alert alert-warning\">Preencha todos os campos </h3>";
	}
	else if($msg == 'loginError')
	{
		echo "<h3 class=\"alert alert-danger\">Usuário ou senha inválido </h3>";
	}
	else if($msg == 'userCad')
	{
		echo "<h3 class=\"alert alert-success\">Usuário cadastrado </h3>";
	}
	else if($msg == 'errorCad')
	{
		echo "<h3 class=\"alert alert-danger\">Não foi possível cadastrar, usuário ou e-mail em uso. </h3>";
	}
	else if($msg == 'userError')
	{
		echo "<h3 class=\"alert alert-danger\">Não foi possível atualizar, usuário ou e-mail em uso. </h3>";
	}
	else if($msg == 'userOk')
	{
		echo "<h3 class=\"alert alert-warning\">Sucesso. </h3>";
	}
} 
 ?>