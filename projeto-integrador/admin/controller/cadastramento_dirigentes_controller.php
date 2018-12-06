<?php 

	include_once "../model/EquipeDAO.php";
	include_once "../model/Dirigentes.php";
	include_once "../model/DirigentesDAO.php";

	class cadastramento_dirigentes_controller
	{
		

		function buscar_equipes(){

			$EquipeDAO = new EquipeDAO();

			return $EquipeDAO->select_equipes_modalidade();

		}
		
	}

	if(isset($_GET['mod'])){
		switch ($_GET['mod']) {
			case 'inserir':

				$dirigentesDAO = new DirigentesDAO();
				$dirigente = new dirigentes();

				$dirigente->set_nome($_POST['nome']);
				$dirigente->set_funcao($_POST['funcao']);
				$dirigente->set_data_nascimento($_POST['data_nascimento']);
				$dirigente->set_rg($_POST['rg']);
				$dirigente->set_siagep($_POST['Siagep']);
				$dirigente->set_equipe($_POST['slc_equipe']);

				$mod = $dirigentesDAO->insert_dirigentes($dirigente);


				if ($mod == 1) {
					header("location: ../view/cadastramento_dirigente.php?swal=True");
				}
				else{
					header("location: ../view/cadastramento_dirigente.php?swal=False");	
				}

				break;
			
			default:
				echo "Ocorreu algum erro";
				break;
		}
	}