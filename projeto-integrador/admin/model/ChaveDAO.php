<?php 
	
	include_once "EquipeDAO.php";


	class ChaveDAO
	{

		private $conexao;

		function __construct()
		{
			$database = new database;
			$this->conexao = $database->conexao();
		}

		public function select_chaves(){

		}
		public function insert_chaves(Chave $chave){
			
			$insert_chaves = "INSERT INTO chaves(cha_torneio) VALUES(:torneio)";

			$st = $this->conexao->prepare($insert_chaves);
			$st->bindValue(":torneio", $chave->get_torneio(), PDO::PARAM_INT);
			$st->execute();

			$insert_equipes_chave = "INSERT INTO chave_equipes(cha_equ_chave, cha_equ_equipe) VALUES(:chave, :equipe)";
			$st1 = $this->conexao->prepare($insert_equipes_chave);

			$ultima_chave_inserida = $this->conexao->lastInsertId();
			$equipes = $chave->get_equipes();

			foreach ($equipes as $key => $e) {
				$st1->bindValue(":chave", $ultima_chave_inserida, PDO::PARAM_INT);
				$st1->bindValue(":equipe", $e, PDO::PARAM_INT);
				$st1->execute();
			}
		}
		public function alter_chaves(){
			
		}
		public function delete_chaves(){
			
		}

		public function select_chaves_for_torneio($evento, $torneio){


			$sql_chave = "SELECT * FROM chaves as c
						  join torneios as t on t.tor_id = c.cha_torneio
						  join evento_torneios as et on et.eve_tor_torneio = t.tor_id
						  join eventos as eve on eve.eve_id = et.eve_tor_evento
						  where et.eve_tor_evento = " . $evento . " and tor_id = " . $torneio;

			


			$result_chaves = $this->conexao->query($sql_chave);
			

			$chaves = array();
			foreach($result_chaves as $key => $c) {
				

				$chave = new Chave();
				$chave->set_id($c['cha_id']);

				$equipeDAO = new equipeDAO();
				$equipes = $equipeDAO->select_equipes_for_chaves($evento, $torneio, $c['cha_id']);

				$chave->set_equipes($equipes);
				$chaves[$key] = $chave;
					
			}

			return $chaves;
		}


	}