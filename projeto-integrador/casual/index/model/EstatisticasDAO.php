<?php

	require_once '../database.php';
	require_once 'Estatisticas.php';

	class EstatisticasDAO
	{
		
		private $database;

		function __construct(){

			$database = new database();
			$this->conexao = $database->conexao();

  		}

  		function select_estatisticas_for_evento($evento, $torneio){

 			$sql = "SELECT SUM(est_equ_vitoria) as vitorias, SUM(est_equ_derrota) as derrotas, SUM(est_equ_empate) as empates, est_equ_equipe id, equ_nome as equipe from estatisticas_equipe as ee
					join eventos as e on e.eve_id = ee.est_equ_evento
					join torneios as t on t.tor_id = ee.est_equ_torneio
					join equipes as eq on eq.equ_id = ee.est_equ_equipe
					where est_equ_evento = " . $evento . " and est_equ_torneio = " . $torneio . " group by equipe";

  			$st = $this->conexao->query($sql);
  			
			$equipes = array();

			foreach($st as $key => $e) {
				$estatisticas = new Estatisticas();

				$estatisticas->set_id_equipe($e['id']);
				$estatisticas->set_equipe($e['equipe']);
				$estatisticas->set_vitoria($e['vitorias']);
				$estatisticas->set_derrota($e['derrotas']);
				$estatisticas->set_empate($e['empates']);

				$equipes[$key] = $estatisticas;
					
			}

			return $equipes;

  		}

	}