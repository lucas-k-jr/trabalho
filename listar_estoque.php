<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="estoque";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_estoque as ID";
	$coluna[]= "nome as Nome";
	$coluna[]= "marca as Marca";
    $coluna[]= "modelo as Modelo";
    $coluna[]= "quantidade as Quantidade";
    $coluna[]= "valor as Valor";

	$condicao = null;
	$ordenacao = "nome";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"estoque",true);
	
	$t->exibe();

?>