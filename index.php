<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->findById(1);

echo $usuario;