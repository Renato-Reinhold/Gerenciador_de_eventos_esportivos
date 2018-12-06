<?php
	

	include_once "../database.php";

	class UsuarioDAO
	{
		
		private $conexao;

		function __construct(){

  			$database = new database();
  			$this->conexao = $database->conexao();

  		}

  		public function analisar_usuario($login, $senha){

  			$sql = "SELECT * from usuario where usu_login = :login and usu_senha = :senha";

  			$st = $this->conexao->prepare($sql);

  			$st->bindParam(':login', $login);
  			$st->bindParam(':senha', $senha);

  			$st->execute();

  			$users = $st->fetchAll(PDO::FETCH_ASSOC);
  			

  			if(count($users) == 1){
  				return true;
  			}
  			else{
  				return false;
  			}

  		}

	}