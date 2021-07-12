<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN ,dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "pedro";
$password = "123asdasd4567";
$id = "2";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Alterados!";
?>