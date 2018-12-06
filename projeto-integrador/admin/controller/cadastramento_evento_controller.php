<?php  

	include_once "../model/EquipeDAO.php";

	include_once "../model/ModalidadeDAO.php";
	
	class cadastramento_evento_controller
	{
		
		function carregar_modalidades(){
			$ModalidadeDAO = new ModalidadeDAO();
			return $ModalidadeDAO->select_modalidades();
		}

		function carregar_equipes($mod_id){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_equipes_for_mod($mod_id);
		}

		function carregar_equipe_futebol(){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_equipes_modalidade();
		}


	}

	$evento_controller = new cadastramento_evento_controller;

	if(isset($_GET['mod'])){

		$res = $evento_controller->carregar_equipes($_GET['mod']);
			
			foreach ($res as $key => $e) {
				
				echo "<option value='" . $res[$key]->get_id() . "'>" . $res[$key]->get_nome() . "</option>";

			}
		
	}