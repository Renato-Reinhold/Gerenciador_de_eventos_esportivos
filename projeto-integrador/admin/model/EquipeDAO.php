<?php

	include_once "Equipe.php";
	include_once "AtletaDAO.php";
	include_once "../database.php";

	class EquipeDAO
	{
	
		private $conexao;

		function __construct(){

  			$database = new database();
  			$this->conexao = $database->conexao();

  		}

  		function select_equipes(){

			$sql = "SELECT * FROM equipes";

			$result = $this->conexao->query($sql);
			$equipes = array();
			foreach ($result as $key => $e) {

				$equipe = new equipe();

				$equipe->set_nome(utf8_encode($e['equ_nome']));
				$equipe->set_id($e['equ_id']);
				$equipe->set_modalidade(utf8_encode($e['equ_modalidade']));

				$equipes[$key] = $equipe;
			}

			return $equipes;
		}

		function insert_equipe(){

		}
		function alter_equipe(){

		}
		function delete_equipe(){

		}

		function select_equipes_for_mod($mod_id){

			$sql = "SELECT * FROM equipes where equ_modalidade = " . $mod_id;

			$result = $this->conexao->query($sql);
			$equipes = array();

			foreach ($result as $key => $e) {

				$equipe = new equipe();

				$equipe->set_nome(utf8_encode($e['equ_nome']));
				$equipe->set_id($e['equ_id']);
				$equipe->set_modalidade(utf8_encode($e['equ_modalidade']));

				$equipes[$key] = $equipe;
			}

			return $equipes;

		}

		function select_equipes_modalidade(){

			$sql = "SELECT equ_id, equ_nome, mod_nome FROM equipes 
					join modalidades on equipes.equ_modalidade = modalidades.mod_id
					where mod_id = 1";

			$result = $this->conexao->query($sql);
			$equipes = array();

			foreach ($result as $key => $e) {

				$equipe = new Equipe();
				
				$equipe->set_nome(utf8_encode($e['equ_nome']));
				$equipe->set_id($e['equ_id']);
				$equipe->set_modalidade(utf8_encode($e['mod_nome']));
				
				$equipes[$key] = $equipe;
			}

			return $equipes;

		}

		public function select_equipes_for_chaves($evento, $torneio, $chave){

			$sql_equipe = "SELECT * from torneios as t
						   join chaves as c on c.cha_torneio = t.tor_id
						   join evento_torneios as ev on ev.eve_tor_torneio = tor_id
						   join chave_equipes as ce on ce.cha_equ_chave = c.cha_id
						   join equipes as e on e.equ_id = ce.cha_equ_equipe
						   where ev.eve_tor_evento = " . $evento . " and t.tor_id = " . $torneio . " and cha_id = " . $chave;

			$result_equipes = $this->conexao->query($sql_equipe);

			$equipes = array();
			foreach($result_equipes as $key1 => $e) {
				$equipes[$key1] = utf8_encode($e['equ_nome']);
			}

			return $equipes;

		}

		public function select_equipes_for_chave($chave){


			$sql_equipes = "SELECT * from chaves as c
						  join chave_equipes as ce on ce.cha_equ_chave = c.cha_id
						  join equipes as e on ce.cha_equ_equipe = e.equ_id
						  where cha_id = " . $chave;

			


			$result_equipes = $this->conexao->query($sql_equipes);
			

			$equipes = array();
			foreach($result_equipes as $key => $e) {
				

				$equipe = new Equipe();
				$equipe->set_id($e['equ_id']);
				$equipe->set_nome(utf8_encode($e['equ_nome']));

				$AtletaDAO = new AtletaDAO();
				$atletas = $AtletaDAO->select_atleta_for_equipe($e['equ_id']);

				$equipe->set_atletas($atletas);
				$equipes[$key] = $equipe;
					
			}

			return $equipes;
		}

		public function insert_estatisticas($equipe, $vitoria, $derrota, $empate, $gols, $evento, $torneio){

			$sql_equipe = "INSERT into estatisticas_equipe(est_equ_equipe, est_equ_vitoria, est_equ_derrota, est_equ_empate, est_equ_gols, est_equ_evento, est_equ_torneio) values(:equipe
			, :vitoria, :derrota, :empate, :gols, :evento, :torneio)";

			$st = $this->conexao->prepare($sql_equipe);
			
			$st->bindValue(":equipe", $equipe, PDO::PARAM_INT);
			$st->bindValue(":vitoria", $vitoria, PDO::PARAM_INT);
			$st->bindValue(":derrota", $derrota, PDO::PARAM_INT);
			$st->bindValue(":empate", $empate, PDO::PARAM_INT);
			$st->bindValue(":gols", $gols, PDO::PARAM_INT);
			$st->bindValue(":evento", $evento, PDO::PARAM_INT);
			$st->bindValue(":torneio", $torneio, PDO::PARAM_INT);

			$st->execute();

		}

		public function select_estatisticas_equipe($equipe){

			$sql_equipe = "SELECT * from estatisticas_equipe where est_equ_equipe = " . $equipe;

			$result_equipes = $this->conexao->query($sql_equipe);

			$equipes = array();
			foreach($result_equipes as $key => $e) {
				$equipes[$key] = $e['est_equ_gols'];
			}

			return $equipes;

		}

	}

