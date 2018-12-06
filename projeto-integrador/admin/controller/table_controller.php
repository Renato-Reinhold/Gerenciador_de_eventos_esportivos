<?php

	require_once "../model/AtletaDAO.php";
	require_once "../model/DirigentesDAO.php";

	class table_controller
	{

		function buscar_atletas(){
			$atletaDAO = new AtletaDAO();
			return $atletaDAO->select_atleta();
		}
		function buscar_dirigentes(){
			$dirigentesDAO = new DirigentesDAO();
			return $dirigentesDAO->select_dirigentes();
		}
	}