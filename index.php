<?php

require_once("config.php");

// Carrega um usuário
// $usuario = new Usuario();
// $usuario->findById(1);
// echo $usuario;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carega uma lista de usuarios buscando pelo login
// $search = Usuario::search("ma");
// echo json_encode($search);

// Carrega um usuario usando um login e a senha
// $usuario = new Usuario();
// $usuario->login("mayck", "123456");
// echo $usuario;

// Insere um novo usuário
// $usuario = new Usuario("milton", "87654");
// $usuario->insert();
// echo $usuario;

// Altera um usuario
// $usuario = new Usuario();
// $usuario->findById(1);
// $usuario->update("Mayck", "!@#$%&");
// echo $usuario;

// Deleta um usuario
$usuario = new Usuario();
$usuario->findById(1);
$usuario->delete();
echo $usuario;
