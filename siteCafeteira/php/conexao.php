<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
# Conexão
mysql_connect('localhost', 'root', 'root') or die('Nao foi possível conectar ao banco de dados: ' . mysql_error());
# Escolhendo o banco de dados
mysql_select_db('progScripts') or die('Nao foi possível selecionar o banco de dados');
?>