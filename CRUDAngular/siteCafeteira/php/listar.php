<?php 
	include "conexao.php";
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Content-Type: application/json');
	# Realiza a consulta na tabela
	$query = "SELECT * from PRODUTOS";
	$result = mysql_query($query) or die('Falha na instrução SQL: ' . mysql_error());
	# Filtra através das linhas de consulta
	$produtos = array();
	while ($row = mysql_fetch_object($result)) {
		$produto = array();
		$produto["id"] = $row->id;
		$produto["creation"] = $row->data_criacao;
		$produto["nome"] = $row->nome;
		$produto["tipo"] = $row->tipo;
		$produto["preco"] = $row->preco;
		$produtos[]=$produto;
	}
	//Cria JSON
	echo json_encode($produtos);
?>