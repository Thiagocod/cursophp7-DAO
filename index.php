<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
/*carrega um lista de usuários
$root = new Usuario();
$root->loadById(3);
echo $root;*/

//$lista = Usuario::getList();
//echo json_encode($lista);

// carrega uma lista de usuarios buscando pelo $login

$search = Usuario::search("ro");

echo json_encode($search);

echo "<hr>";

echo "Carrega um usuário usando o login e a senha";

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;


?>
