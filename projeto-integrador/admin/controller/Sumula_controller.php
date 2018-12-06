<?php

	include_once "../model/EquipeDAO.php";

	class Sumula_controller	{
		
		function select_equipes_for_chave($chave){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_equipes_for_chave($chave);
		}

		function select_estatisticas_equipe($equipe){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_estatisticas_equipe($equipe);
		}

		function select_estatisticas_atleta($atleta){
			$atletaDAO = new AtletaDAO();
			return $atletaDAO->select_estatisticas_atleta($atleta);
		}
	}