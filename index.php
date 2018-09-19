<?php
	require_once("config.php");

	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(18);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);


	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("ou");
	//echo json_encode($search);

	$usuario = new Usuario();
	$usuario->login("root","!@#$%");
	echo $usuario;
?>


