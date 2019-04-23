<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="funcionario";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_funcionario as ID";
	$coluna[]= "nome as Nome";
	$coluna[]= "telefone as Telefone";
	$coluna[]= "email as Email";
    $coluna[]= "sexo as Sexo";
    $coluna[]= "data_nascimento as 'Data de Nascimento'";

	$condicao = null;
	$ordenacao = "nome";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"funcionario",true);
	
	$t->exibe();

?>