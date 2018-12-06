<?php 

	include_once "../database.php";

	include_once "Dirigentes.php";

	class DirigentesDAO
	{
		
		private $conexao;

		function __construct()
		{
			$database = new database;
			$this->conexao = $database->conexao();
		}

		public function select_dirigentes(){

			$sql_select = "SELECT * from dirigentes as d
						   join equipes_dirigentes as ed on ed.equ_dir_dirigente = d.dir_id
						   join equipes as e on e.equ_id = ed.equ_dir_equipe;";

			$st = $this->conexao->query($sql_select);
			$dirigentes = array();
			foreach ($st as $key => $d) {
				
				$nome = $d['dir_nome'];
				$funcao = $d['dir_funcao'];
				$data_nascimento = $d['dir_data_nascimento'];
				$rg = $d['dir_rg'];
				$siagep = $d['dir_siagep'];
				$equipe = $d['equ_nome'];


				$dirigente = new Dirigentes();

				$dirigente->set_nome($nome);
				$dirigente->set_funcao($funcao);
				$dirigente->set_data_nascimento($data_nascimento);
				$dirigente->set_rg($rg);
				$dirigente->set_siagep($siagep);
				$dirigente->set_equipe($equipe);

				$dirigentes[$key] = $dirigente;

			}
			return $dirigentes;

		}
		public function insert_dirigentes(dirigentes $dirigente){

			$sql_insert = "INSERT INTO dirigentes(dir_nome, dir_funcao, dir_data_nascimento, dir_rg, dir_siagep) VALUES(:nome, :funcao, :data_nascimento, :rg, :siagep)";

			$st = $this->conexao->prepare($sql_insert);

			$st->bindValue(":nome", $dirigente->get_nome(), PDO::PARAM_STR);
			$st->bindValue(":funcao", $dirigente->get_funcao(), PDO::PARAM_STR);
			$st->bindValue(":data_nascimento", $dirigente->get_data_nascimento(), PDO::PARAM_STR);
			$st->bindValue(":rg", $dirigente->get_rg(), PDO::PARAM_STR);
			$st->bindValue(":siagep", $dirigente->get_siagep(), PDO::PARAM_STR);

			$st->execute();

			$ultimo_dirigente_inserido = $this->conexao->lastInsertId();

			$sql_equipe = "INSERT INTO equipes_dirigentes(equ_dir_equipe, equ_dir_dirigente) VALUES (:equipe, :dirigente)";

			$stm = $this->conexao->prepare($sql_equipe);
			$stm->bindValue(":equipe", $dirigente->get_equipe(), PDO::PARAM_INT);
			$stm->bindValue(":dirigente", $ultimo_dirigente_inserido, PDO::PARAM_INT);
			
			$stm->execute();

			return 1;

		}
		public function alter_dirigentes(){

			$sql_alter = "";

		}
		public function delete_dirigentes(){

			$sql_delete = "";

		}
	}