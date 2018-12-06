<?php 

	class Atleta
	{
		
		private $id;
		private $nome;
		private $data_nascimento;
		private $rg;
		private $num_inscricao;
		private $sexo;
		private $cidade;
		private $modalidade_praticada;
		private $equipe;


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
		function get_equipe(){
			return $this->equipe;
		}
		function set_equipe($equipe){
			$this->equipe = $equipe;
		}
		function get_data_nascimento(){
			return $this->data_nascimento;
		}
		function set_data_nascimento($data_nascimento){
			$this->data_nascimento = $data_nascimento;
		}
		function get_rg(){
			return $this->rg;
		}
		function set_rg($rg){
			$this->rg = $rg;
		}
		function get_num_inscricao(){
			return $this->num_inscricao;
		}
		function set_num_inscricao($num_inscricao){
			$this->num_inscricao = $num_inscricao;
		}
		function get_cidade(){
			return $this->cidade;
		}
		function set_cidade($cidade){
			$this->cidade = $cidade;
		}
		function get_sexo(){
			return $this->sexo;
		}
		function set_sexo($sexo){
			$this->sexo = $sexo;
		}
		function get_modalidade_praticada(){
			return $this->modalidade_praticada;
		}
		function set_modalidade_praticada($modalidade_praticada){
			$this->modalidade_praticada = $modalidade_praticada;
		}

	}