<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="pedido";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_pedido as ID";
	$coluna[]= "valor as valor";
	$coluna[]= "quantidade as quantidade";
	$coluna[]= "modelo as modelo";

	$condicao = null;
	$ordenacao = "valor";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"pedido",true);
	
	$t->exibe();

?>