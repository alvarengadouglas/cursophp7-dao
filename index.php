<?php
	require_once("config.php");

	$root = new Usuario();

	$root->loadById(18);

	echo $root;
?>


