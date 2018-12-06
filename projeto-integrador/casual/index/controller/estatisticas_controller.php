<?php

	require_once "../model/TorneioDAO.php";
	require_once "../model/EstatisticasDAO.php";
	
	class estatisticas_controller
	{

		function select_torneios_for_evento($evento){
			$TorneioDAO = new TorneioDAO();
			return $TorneioDAO->select_torneios_for_evento($evento);
		}

		function select_estatisticas($evento, $torneio){
			$EstatisticasDAO = new EstatisticasDAO();
			return $EstatisticasDAO->select_estatisticas_for_evento($evento, $torneio);
		}


	}
