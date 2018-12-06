<?php 

	include_once "../database.php";
	include_once "Torneio.php";
	include_once "Chave.php";
	include_once "ChaveDAO.php";

	class TorneioDAO
	{
		
		private $conexao;

		function __construct()
		{
			$database = new database;
			$this->conexao = $database->conexao();
		}

		public function select_torneios(){

			$sql = "SELECT * FROM torneios";

			$result = $this->conexao->query($sql);
			$torneios = array();

			foreach ($result as $key => $t) {
				
				$id = $t['tor_id'];
				$modalidade = $t['tor_modalidade'];

				$torneio = new Torneio();
				$torneio->set_id($id);
				$torneio->set_modalidade($modalidade);

				$torneios[$key] = $torneio;

			}

			return $torneios;
		}

		public function insert_torneio(Torneio $torneio){

			$insert_torneio = "INSERT INTO torneios(tor_modalidade) VALUES(:modalidade)";

			$st = $this->conexao->prepare($insert_torneio);
			$st->bindValue(":modalidade", $torneio->get_modalidade(), PDO::PARAM_STR);

			$st->execute();

			$ultimo_toneio_inserido = $this->conexao->lastInsertId();
			#relacionamento evento_torneio
			$torneio->set_id($ultimo_toneio_inserido);

			$chaves = $torneio->get_chaves();

			foreach ($chaves as $key => $value) {
				$chaves[$key]->set_torneio($ultimo_toneio_inserido);
			}


			

		}


		function select_torneios_for_evento($evento){

			$sql_torneio = "SELECT * FROM torneios as t
							join evento_torneios as et on t.tor_id = et.eve_tor_torneio
							join eventos as e on e.eve_id = et.eve_tor_evento
							join modalidades as m on m.mod_id = t.tor_modalidade
							where eve_tor_evento = " . $evento;
			

			$result_torneios = $this->conexao->query($sql_torneio);

			$torneios = array();
			foreach($result_torneios as $key => $t) {
				

				$id = $t['tor_id'];
				$modalidade = utf8_encode($t['mod_nome']);

				$chaveDAO = new chaveDAO();
				$chaves = $chaveDAO->select_chaves_for_torneio($evento, $id);

				$torneio = new Torneio();
				$torneio->set_id($id);
				$torneio->set_modalidade($modalidade);
				
				$torneio->set_chaves($chaves);
				$torneios[$key] = $torneio;
				
			}

			return $torneios;
		}
		
	}