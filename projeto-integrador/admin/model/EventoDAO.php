<?php 

	include_once "../database.php";
	include_once "Evento.php";
	include_once "Torneio.php";

	class EventoDAO
	{
		
		private $conexao;

		function __construct()
		{
			$database = new database;
			$this->conexao = $database->conexao();
		}

		public function select_eventos(){

			$sql_select = "SELECT * FROM eventos";

			$result = $this->conexao->query($sql_select);
			$eventos = array();
			foreach ($result as $key => $e) {

				$evento = new Evento();

				$evento->set_nome(utf8_encode($e['eve_nome']));
				$evento->set_id($e['eve_data']);
				$evento->set_modalidade(utf8_encode($e['eve_local_torneios']));
				$evento->set_id($e['eve_id']);

				$equipes[$key] = $evento;
			}

			return $equipes;

		}
		public function insert_eventos(Evento $evento){

			$insert_evento = "INSERT INTO eventos(eve_nome, eve_local_torneios, eve_data) VALUES(:nome, :local_torneios, :data)";

			$st = $this->conexao->prepare($insert_evento);
			
			$st->bindValue(":nome", $evento->get_nome(), PDO::PARAM_STR);
			$st->bindValue(":local_torneios", $evento->get_local_torneios(), PDO::PARAM_STR);
			$st->bindValue(":data", $evento->get_data(), PDO::PARAM_STR);

			$st->execute();

			$ultimo_evento_inserido = $this->conexao->lastInsertId();

			$insert_torneios_evento = "INSERT INTO evento_torneios(eve_tor_evento, eve_tor_torneio) VALUES(:evento, :torneio)";

			$st1 = $this->conexao->prepare($insert_torneios_evento);
			$torneios = $evento->get_torneios();

			foreach ($torneios as $key => $value) {
				$st1->bindValue(":evento", $ultimo_evento_inserido, PDO::PARAM_INT);
				$st1->bindValue(":torneio", $torneios[$key]->get_id(), PDO::PARAM_INT);
				$st1->execute();
			}

			return 1;

		}
		public function alter_eventos(){

			$sql_alter = "";

		}
		public function delete_evento($id){
			
			$sql_delete_evento = "DELETE FROM eventos where eve_id = :id";

			$st = $this->conexao->prepare($sql_delete_evento);
			$st->bindValue(":id", $id, PDO::PARAM_INT);

			return $st->execute();
		}

		public function select_eventos_total(){

			$select_eventos = "SELECT * FROM eventos";

			$select_torneios = "SELECT tor_id, mod_nome FROM eventos as e
								join evento_torneios as et on e.eve_id = et.eve_tor_evento
								join torneios as t on t.tor_id = et.eve_tor_torneio
								join modalidades as m on m.mod_id = t.tor_modalidade;";

			$result_eventos = $this->conexao->query($select_eventos);
			$result_torneios = $this->conexao->query($select_torneios);

			$eventos = array();
			$torneios = array();

			foreach ($result_eventos as $key => $e) {

				$evento = new Evento();

				$evento->set_nome(utf8_encode($e['eve_nome']));
				$evento->set_data($e['eve_data']);
				$evento->set_local_torneios(utf8_encode($e['eve_local_torneios']));
				$evento->set_id($e['eve_id']);

				foreach ($result_torneios as $key => $t) {

					$torneio = new Torneio();
					$torneio->set_id($t['tor_id']);
					$torneio->set_modalidade(utf8_encode($t['mod_nome']));
					$torneios[$key] = $torneio;

				}

				$evento->set_torneios($torneios);

				$eventos[$key] = $evento;
			}

			return $eventos;

		}
	}