<?php  
	
	include_once "../model/EventoDAO.php";

	class lista_eventos_controller
	{
		public function carregar_eventos(){
			$EventoDAO = new EventoDAO();
			return $EventoDAO->select_eventos_total();
		}
	}

	if(isset($_GET['evento'])){
		if($_GET['mod'] == 'excluir'){
			$EventoDAO = new EventoDAO();
			$result = $EventoDAO->delete_evento($_GET['evento']);

			if ($result == 1) {
				header("location: ../view/lista_eventos.php?swal=True");
			}
			else{
				header("location: ../view/lista_eventos.php?swal=False");	
			}
		}
		if($_GET['mod'] == 'settings'){
			
		}
	}