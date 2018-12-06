<?php 


	include_once "Atleta.php";
	include_once "../database.php";

	class AtletaDAO
	{

		private	$conexao;

  		function __construct(){

  			$database = new database();
  			$this->conexao = $database->conexao();

  		}

  		function select_atleta(){

			$sql = "SELECT * from atletas as a
					join modalidades as m on m.mod_id = a.atl_modalidade
					join equipes_atletas as ea on ea.equ_atl_atleta = a.atl_id
					join equipes as e on e.equ_id = ea.equ_atl_equipe;";

			$result = $this->conexao->query($sql);
			$atletas = array();

			foreach ($result as $key => $a) {
				
				$id = $a['atl_id'];
				$nome = $a['atl_nome'];
				$data_nascimento = $a['atl_data_nascimento'];
				$rg = $a['atl_rg'];
				$num_inscricao = $a['atl_num_inscricao'];
				$sexo = $a['atl_sexo'];
				$cidade = $a['atl_cidade'];
				$modalidade = $a['mod_nome'];
				$equipe = $a['equ_nome'];

				$atleta = new Atleta();
				$atleta->set_id($id);
				$atleta->set_nome($nome);
				$atleta->set_data_nascimento($data_nascimento);
				$atleta->set_rg($rg);
				$atleta->set_num_inscricao($num_inscricao);
				$atleta->set_sexo($sexo);
				$atleta->set_cidade($cidade);
				$atleta->set_modalidade_praticada($modalidade);
				$atleta->set_equipe($equipe);

				$atletas[$key] = $atleta;

			}

			return $atletas;

		}

		function insert_atleta(Atleta $atleta){

			$sql_atleta = "INSERT INTO atletas(atl_nome, atl_data_nascimento, atl_rg, atl_num_inscricao, atl_sexo, atl_cidade, atl_modalidade)
						   VALUES(:nome, :data_nascimento, :rg, :num_inscricao, :sexo, :cidade, :modalidade)";

			$st = $this->conexao->prepare($sql_atleta);
			
			$st->bindValue(":nome", $atleta->get_nome(), PDO::PARAM_STR);
			$st->bindValue(":data_nascimento", $atleta->get_data_nascimento(), PDO::PARAM_STR);
			$st->bindValue(":rg", $atleta->get_rg(), PDO::PARAM_STR);
			$st->bindValue(":num_inscricao", $atleta->get_num_inscricao(), PDO::PARAM_STR);
			$st->bindValue(":sexo", $atleta->get_sexo(), PDO::PARAM_STR);
			$st->bindValue(":cidade", $atleta->get_cidade(), PDO::PARAM_INT);
			$st->bindValue(":modalidade", $atleta->get_modalidade_praticada(), PDO::PARAM_INT);

			$st->execute();

			$ultimo_atleta_inserido = $this->conexao->lastInsertId();

			$sql_equipe = "INSERT INTO equipes_atletas(equ_atl_equipe, equ_atl_atleta) VALUES (:equipe, :atleta)";

			$stm = $this->conexao->prepare($sql_equipe);
			$stm->bindValue(":equipe", $atleta->get_equipe(), PDO::PARAM_INT);
			$stm->bindValue(":atleta", $ultimo_atleta_inserido, PDO::PARAM_INT);
			
			return $stm->execute();

		}

		function alter_atleta(Atleta $Atleta){

			$sql = "ALTER TABLE atletas...";

		}
		function delete_atleta($atl_id){

			$sql = "DELETE FROM alunas where atl_id =" . $atl_id;

		}

		public function select_atleta_for_equipe($equipe){


			$sql_atleta = "select * from atletas as a
						  join equipes_atletas as ea on ea.equ_atl_atleta = a.atl_id
						  where ea.equ_atl_equipe = " . $equipe;


			$result_atletas = $this->conexao->query($sql_atleta);
			

			$atletas = array();
			foreach($result_atletas as $key => $a) {
				

				$atleta = new Atleta();
				$atleta->set_id($a['atl_id']);
				$atleta->set_nome(utf8_encode($a['atl_nome']));

				$atletas[$key] = $atleta;
					
			}

			return $atletas;
		}

		public function insert_estatisticas($atleta, $amarelo, $vermelho, $gols){

			$sql_atleta = "INSERT into estatisticas_atleta(est_atl_atleta, est_atl_amarelo, est_atl_vermelho, est_atl_gols) values(:atleta, :amarelo, :vermelho, :gols)";

			$st = $this->conexao->prepare($sql_atleta);
			
			$st->bindValue(":atleta", $atleta, PDO::PARAM_INT);
			$st->bindValue(":amarelo", $amarelo, PDO::PARAM_INT);
			$st->bindValue(":vermelho", $vermelho, PDO::PARAM_INT);
			$st->bindValue(":gols", $gols, PDO::PARAM_INT);

			$st->execute();

		}

		public function select_estatisticas_atleta($atleta){

			$sql_atleta = "SELECT * from estatisticas_atleta where est_atl_atleta = " . $atleta;

			$result_atletas = $this->conexao->query($sql_atleta);

			$atletas = array();
			foreach($result_atletas as $key => $e) {
				$atletas[$key] = $e['est_atl_atleta'];
				$atletas[$key] = $e['est_atl_amarelo'];
				$atletas[$key] = $e['est_atl_vermelho'];
				$atletas[$key] = $e['est_atl_gols'];
			}

			return $atletas;

		}

	}