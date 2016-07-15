<?php 
	include "conexao.php";
	header('Content-Type: application/json');
	$query = "INSERT INTO PRODUTOS (nome, data_criacao, preco, tipo) VALUES ('" . $_POST['nome'] . "', '".$_POST['creation']."', '".$_POST['preco']."', '".$_POST['tipo']."')";
	$result = mysql_query($query) or die('Falha na instrução SQL: ' . mysql_error());
	//Retorna JSON de resposta
	$produto = array();
	$produto["id"] = mysql_insert_id();
	$produto["creation"] = $_POST['creation'];
	$produto["nome"] = $_POST['nome'];
	$produto["tipo"] = $_POST['tipo'];
	$produto["preco"] = $_POST['preco'];
	echo json_encode($produto);
?>