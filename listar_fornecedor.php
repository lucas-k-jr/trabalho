<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="fornecedor";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_fornecedor as ID";
	$coluna[]= "nome_razao as nome_razao";
	$coluna[]= "nome_fantasia as nome_fantasia";
	$coluna[]= "cidade as cidade";
	$coluna[]= "cnpj as cnpj";

	$condicao = null;
	$ordenacao = "nome_razao";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"fornecedor",true);
	
	$t->exibe();

?>