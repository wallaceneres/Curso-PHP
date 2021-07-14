<?php

require_once ("config.php");

/*retorna a lista de usuarios
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/*retorna um usuario especifico enviado atraves do metodo loadById
$teste = new Usuario();

$teste->loadByID(3);

echo $teste;*/

//tambem retorna uma lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//carrega uma lista de usuarios buscando pelo login

/*$busca = Usuario::search("se");

echo json_encode($busca);*/

//carrega os dados do usuario usando login e senha

/*$entrar = new Usuario();

$entrar->login("user", "123456");

echo $entrar;*/

//insere um novo cadastro apartir de uma procedure no banco de dados

/*$aluno = new Usuario("aluno", "teste");

$aluno->insert();

echo $aluno;*/

//altera um usuario no banco de dados

/*$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","linguica");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>