<?php  

	class Cidade
	{
		
		private $id;
		private $nome;

		function get_nome(){
			return $this->nome;
		}
		function get_id(){
			return $this->id;
		}
		function set_nome($nome){
			$this->nome = $nome;
		}
		function set_id($id){
			$this->id = $id;
		}

	}