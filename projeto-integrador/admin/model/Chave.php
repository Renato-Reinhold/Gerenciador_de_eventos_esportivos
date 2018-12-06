<?php 
	
	class Chave
	{
		private $id;
		private $equipes;
		private $torneio;

		function get_equipes(){
			return $this->equipes;
		}
		function set_equipes($equipes){
			$this->equipes = $equipes;
		}
		function get_id(){
			return $this->id;
		}
		function set_id($id){
			$this->id = $id;
		}
		function get_torneio(){
			return $this->torneio;
		}
		function set_torneio($torneio){
			$this->torneio = $torneio;
		}


		function chaveamento_automatico($equipes){

			$chaves = array();
			var_dump($equipes);
			for ($i=0; $i < (sizeof($equipes)/2)+1; $i++) {

			 	$equipe = array();

				$chave = new Chave();

				$equipe[$i] = $equipes[$i];
				$equipe[$i+1] = $equipes[$i+1];

				$chave->set_equipes($equipe);

				$chaves[$i] = $chave;

				$i++;

			}

			return $chaves;
		}


	}