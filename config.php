<?php
try
{
	$pdo = new PDO("mysql:dbname=caixa_eletronico;host=localhost", "root", "");
}
catch(PDOException $e)
{
	echo "Falha na conexão: ".$e->getMessage();
	exit;
}