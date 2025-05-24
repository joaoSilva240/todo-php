<?php
require "conexao.php";

$nome = $_POST["nome"];

$comando = $conexao->prepare("INSERT INTO categoria VALUES(0,:nome)");
$comando->bindParam(":nome",$nome);
$comando->execute();

echo "Cadastro realizado com sucesso";
?>