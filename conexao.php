<?php
    $bd = "mysql:host=localhost:3307;dbname=dell;charset=utf8";
    $user = "root";
    $senha = "usbw";

	try{
		$conexao = new PDO($bd,$user,$senha);
	}
	catch(Exception $e){
		echo "Erro ao conectar no banco de dados";
	}

?>