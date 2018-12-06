<?php 

	include_once "../model/EventoDAO.php";

	class index_controller
	{
		
		public function select_eventos(){

			$EventoDAO = new EventoDAO();
			return $EventoDAO->select_eventos_total();

		}

	}