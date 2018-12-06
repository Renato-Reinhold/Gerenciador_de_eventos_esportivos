<?php  

	class Dirigentes
	{
		
		private $nome;
		private $funcao;
		private $data_nascimento;
		private $rg;
		private $siagep;
		private $equipe;

		function get_nome(){
			return $this->nome;
		}
		function get_funcao(){
			return $this->funcao;
		}
		function get_data_nascimento(){
			return $this->data_nascimento;
		}
		function get_rg(){
			return $this->rg;
		}
		function get_siagep(){
			return $this->siagep;
		}
		function get_equipe(){
			return $this->equipe;
		}
		function set_equipe($equipe){
			$this->equipe = $equipe;
		}
		function set_nome($nome){
			$this->nome = $nome;
		}
		function set_funcao($funcao){
			$this->funcao = $funcao;
		}
		function set_data_nascimento($data_nascimento){
			$this->data_nascimento = $data_nascimento;
		}
		function set_rg($rg){
			$this->rg = $rg;
		}
		function set_siagep($siagep){
			$this->siagep = $siagep;
		}
	}