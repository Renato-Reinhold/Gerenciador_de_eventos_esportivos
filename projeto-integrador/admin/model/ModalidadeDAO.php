<?php  

	include_once "Modalidade.php";
	include_once "../database.php";

	class ModalidadeDAO
	{
		
		private $conexao;

		function __construct(){

  			$database = new database();
  			$this->conexao = $database->conexao();

  		}

		function select_modalidades(){

			$sql_buscar_modalidades = "select * from modalidades";

			$result = $this->conexao->query($sql_buscar_modalidades);
			$modalidades = array();
			foreach ($result as $key => $m) {

				$modalidade = new Modalidade;

				$modalidade->set_nome(utf8_encode($m['mod_nome']));
				$modalidade->set_tipo($m['mod_tipo']);
				$modalidade->set_id($m['mod_id']);

				$modalidades[$key] = $modalidade;
			}

			return $modalidades;
		}
	}