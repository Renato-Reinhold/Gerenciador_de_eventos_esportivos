<?php 

	require_once '../database.php';

	class Estatisticas
	{
		
		private $id_equipe;
		private $equipe;
		private $vitoria;
		private $derrota;
		private $empate;
		private $saldo_gols;


		function get_id_equipe(){
			return $this->id_equipe;
		}
		function set_id_equipe($id_equipe){
			$this->id_equipe = $id_equipe;
		}

		function get_equipe(){
			return $this->equipe;
		}
		function set_equipe($equipe){
			$this->equipe = $equipe;
		}

		function get_vitoria(){
			return $this->vitoria;
		}
		function set_vitoria($vitoria){
			$this->vitoria = $vitoria;
		}

		function get_derrota(){
			return $this->derrota;
		}
		function set_derrota($derrota){
			$this->derrota = $derrota;
		}

		function get_empate(){
			return $this->empate;
		}
		function set_empate($empate){
			$this->empate = $empate;
		}

		function get_saldo_gols(){
			return $this->saldo_gols;
		}
		function set_saldo_gols($saldo_gols){
			$this->saldo_gols = $saldo_gols;
		}

	}