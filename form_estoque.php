<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=estoque";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "marca";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite a marca...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "modelo";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o modelo...";	
    $f->add_input($parametros);
    
    $parametros = null;
	$parametros["name"] = "quantidade";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite a quantidade...";	
    $f->add_input($parametros);
    
    $parametros = null;
	$parametros["name"] = "valor";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite o valor...";	
    $f->add_input($parametros);

	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
