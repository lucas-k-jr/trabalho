<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=cliente";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "cidade";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite a cidade...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "data_nascimento";
	$parametros["type"] = "date";
	$parametros["placeholder"] = "Digite a data de Nascimento...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "estado";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o estado...";
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "sexo";
	$parametros["type"] = "radio";
	$parametros["opcoes"] = array("m"=>"Masc.","f"=>"Fem.");
	$parametros["label"] = "Sexo";	
	$f->add_inputOpcoes($parametros);
	
	$parametros = null;
	$parametros["name"] = "email";
	$parametros["type"] = "email";
	$parametros["placeholder"] = "Digite o email do cliente...";	
	$f->add_input($parametros);


	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
