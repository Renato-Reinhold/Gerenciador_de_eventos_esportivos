<?php

	class Torneio
	{
		
		private $id;
		private $modalidade;
		private $chaves;

		function get_modalidade(){
			return $this->modalidade;
		}

		function set_modalidade($modalidade){
			$this->modalidade = $modalidade;
		}

		function set_chaves($chaves){
			$this->chaves = $chaves;
		}

		function get_chaves(){
			return $this->chaves;
		}
		function set_id($id){
			$this->id = $id;
		}
		function get_id(){
			return $this->id;
		}

	}