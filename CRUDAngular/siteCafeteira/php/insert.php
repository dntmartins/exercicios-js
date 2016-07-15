<?php 
	include "conexao.php";
	header('Content-Type: application/json');
	$query = "INSERT INTO PRODUTOS (nome, data_criacao, preco, tipo) VALUES ('" . $_GET['nome'] . "', '".$_GET['creation']."', '".$_GET['preco']."', '".$_GET['tipo']."')";
	$result = mysql_query($query) or die('Falha na instrução SQL: ' . mysql_error());
	$produto = array();
	//Retorna JSON de resposta
	$produto["id"] = mysql_insert_id();
	$produto["creation"] = $_GET['creation'];
	$produto["nome"] = $_GET['nome'];
	$produto["tipo"] = $_GET['tipo'];
	$produto["preco"] = $_GET['preco'];
	echo json_encode($produto);
?>
