<?php

	include_once "../model/EquipeDAO.php";

	class terminar_partida_controller
	{
		
		function select_equipes_for_chave($chave){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_equipes_for_chave($chave);
		}

	}