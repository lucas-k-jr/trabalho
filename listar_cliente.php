<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="cliente";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_cliente as ID";
	$coluna[]= "nome as Nome";
	$coluna[]= "cidade as Cidade";
	$coluna[]= "data_nascimento as 'Data de Nascimento'";
	$coluna[]= "estado as Estado";
	$coluna[]= "sexo as Sexo";
	$coluna[]= "email as Email";


	$condicao = null;
	$ordenacao = "nome";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"cliente",true);
	
	$t->exibe();

?>