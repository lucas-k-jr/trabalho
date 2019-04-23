<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=fornecedor";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "nome_razao";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "nome_fantasia";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome fantasia...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "cidade";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite a cidade...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "cnpj";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite o CNPJ...";
	$f->add_input($parametros);

	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
