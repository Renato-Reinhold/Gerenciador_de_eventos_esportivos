<?php

	
	class Usuario
	{
		
		private $id;
		private $login;
		private $senha;


		public function get_id(){
			return $this->id;
		}
		public function set_id($id){
			$this->id = $id;
		}
		public function get_login(){
			return $this->login;
		}
		public function set_login($login){
			$this->login = $login;
		}
		public function get_senha(){
			return $this->senha;
		}
		public function set_senha($senha){
			$this->senha = $senha;
		}
	}