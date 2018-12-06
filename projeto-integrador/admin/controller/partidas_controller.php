<?php  

	include_once "../model/TorneioDAO.php";

	class partidas_controller
	{
		
		public function carregar_torneios_eventos($evento){
			$TorneioDAO = new TorneioDAO();
			return $TorneioDAO->select_torneios_for_evento($evento);
		}
		
	}