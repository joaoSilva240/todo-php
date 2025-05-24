<?php

require "conexao.php";

$id = $_GET["id"];

$comando = $conexao->prepare("DELETE FROM categoria WHERE id=:id");
$comando->bindParam(":id", $id);
$comando->execute();

header("Location: index.php");

?>