<?php 
	

	include_once "Cidade.php";

	include_once "../database.php";

	class CidadeDAO
	{
		
		private $conexao;

		function __construct()
		{
			
			$database = new database();
  			$this->conexao = $database->conexao();

		}

		function select_cidades(){

			$sql = "SELECT * FROM cidades";

			$result = $this->conexao->query("$sql");
			$cidades = array();
			foreach ($result as $key => $c) {

				$cidade = new Cidade;

				$cidade->set_nome(utf8_encode($c['cid_nome']));
				$cidade->set_id(utf8_encode($c['cid_id']));

				$cidades[$key] = $cidade;
			}

			return $cidades;

		}
	}