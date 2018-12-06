<?php 

	class Equipe
	{
		
		private $id;
		private $nome;
		private $modalidade;
		private $atletas = array();
		private $dirigentes;

		function get_id(){
			return $this->id;
		}
		function set_id($id){
			$this->id = $id;
		}
		function get_nome(){
			return $this->nome;
		}
		function set_nome($nome){
			$this->nome = $nome;
		}
		function get_atletas(){
			return $this->atletas;
		}
		function set_atletas($atletas){
			$this->atletas = $atletas;
		}
		function get_modalidade(){
			return $this->modalidade;
		}
		function set_modalidade($modalidade){
			$this->modalidade = $modalidade;
		}
		function get_dirigentes(){
			return $this->dirigentes;
		}
		function set_dirigentes($dirigentes){
			$this->dirigentes = $dirigentes;
		}	


	}