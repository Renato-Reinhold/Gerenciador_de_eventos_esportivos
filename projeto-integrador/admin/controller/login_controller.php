<?php 

	include_once "../model/UsuarioDAO.php";

	$usuarioDAO = new UsuarioDAO();

	if($usuarioDAO->analisar_usuario($_POST['login'], $_POST['password'])){
		header("location: ../view/index/index.html");
	}
	else{
		header("location: ../view/login.php");
	}