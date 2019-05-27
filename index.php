<?php
require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


// Retorna um registro

//$root = new Usuario();


//$root->loadbyId(3);


//echo $root;


//Carrega varios registros
//$lista = Usuario::getList();

//echo json_encode($lista);

//$search = Usuario::search("jo");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("Franklin","54321");

//echo $usuario;


//Novo Usuario

//$aluno = new Usuario("Frederico", "@gaso");


//$aluno->insert();

//echo $aluno;

//Delete Usuario

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;




?>