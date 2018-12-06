<?php
	
	class database
	{
		
		private $conexao;


		function conexao()
		{

			try{

				$this->conexao = new PDO('mysql:host=localhost;dbname=administrador', 'root', 'aluno');

			}
			catch(PDOExcption $e){
				echo $e -> getMessage()  . '</br>';
				exit;
			}

			return $this->conexao;
		}

		function disconect(){

			$this->conexao = null;

		}
	}