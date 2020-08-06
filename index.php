<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
/*carrega uma lista de usuários
$root = new Usuario();
$root->loadById(3);
echo $root;*/

//$lista = Usuario::getList();
//echo json_encode($lista);

// carrega uma lista de usuarios buscando pelo $login

$search = Usuario::search("ro");

echo json_encode($search);

echo "<hr>";

echo "Carrega um usuário usando o login e a senha<br>";

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;

echo "<hr>";

//echo "Inseri um novo usuario no banco de dados<br>";
//$aluno = new Usuario("aluno02","@alun02");

//$aluno->insert();

//echo $aluno;

echo "<hr>";
echo "Alterar um Usuario";
$update = new Usuario();
$update->loadById(3);
$update->update("root2","senhaqualquer");
echo $update;
echo "<hr>";

echo "Deletar um usuario";

$del = new Usuario();

$del->loadById(15);

$del->delete();

echo $del;

?>
