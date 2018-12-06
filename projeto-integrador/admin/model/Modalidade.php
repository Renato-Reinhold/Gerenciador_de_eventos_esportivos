<?php

	class Modalidade
	{

		private $id;
		private $nome;
		private $tipo;

		
		function get_nome(){
			return $this->nome;
		}

		 function get_tipo(){
			return $this->tipo;
		}

		function get_id(){
			return $this->id;
		}

		 function set_id($id){
			$this->id = $id;
		}

		 function set_nome($nome){
			$this->nome = $nome;
		}

		 function set_tipo($tipo){
			$this->tipo = $tipo;
		}

	}

?>