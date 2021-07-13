<?php

require_once ("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

$teste = new Usuario();

$teste->loadByID(3);

echo $teste;

?>