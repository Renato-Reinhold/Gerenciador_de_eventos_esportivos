<?php  

	include_once "../model/ModalidadeDAO.php";

	include_once "../model/CidadeDAO.php";

	include_once "../model/EquipeDAO.php";


	class cadastramento_atleta_controller
	{

		function buscar_modalidades(){
			$ModalidadeDAO = new ModalidadeDAO;
			return $ModalidadeDAO->select_modalidades();
		}

		function buscar_cidades(){
			$CidadeDAO = new CidadeDAO;
			return $CidadeDAO->select_cidades();
		}

		function buscar_equipes($mod_id){
			$EquipeDAO = new EquipeDAO;
			return $EquipeDAO->select_equipes_for_mod($mod_id);
		}

		function carregar_equipes_and_modalidades(){
			$EquipeDAO = new EquipeDAO();
			return $EquipeDAO->select_equipes_modalidade();
		}
		
	}


	$cadastramento_atleta_controller = new cadastramento_atleta_controller();

	if(isset($_GET['mod'])){

		$res = $cadastramento_atleta_controller->buscar_equipes($_GET['mod']);
		
		foreach ($res as $key => $e) {
			
			echo "<option " . $res[$key]->get_id() . ">" . $res[$key]->get_nome() . "</option>";

		}

	}