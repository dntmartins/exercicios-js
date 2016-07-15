<?php 
	include "conexao.php";
	header('Content-Type: application/json');
	$query = "DELETE FROM PRODUTOS WHERE id = ". $_GET['id'];
	$result = mysql_query($query) or die('Falha na instrução SQL: ' . mysql_error());
	//Retorna JSON de resposta
	echo json_encode(array("status" => true));
?>
