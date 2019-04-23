<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=funcionario";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "telefone";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite o telefone...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "email";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o email...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "sexo";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o SEXO...";
    $f->add_input($parametros);

    $parametros = null;
	$parametros["name"] = "data_nascimento";
	$parametros["type"] = "date";
	$parametros["placeholder"] = "Digite a data de nascimento...";
	$f->add_input($parametros);

	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
