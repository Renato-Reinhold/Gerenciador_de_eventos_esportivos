<?php 

	include_once "../model/Atleta.php";
	include_once "../model/AtletaDAO.php";	

	$database = new database;
	$conexao = $database->conexao();

	if($_GET['mod'] == 'inserir'){
			
		$nome = $_POST['nome_atleta'];
		$data_nascimento = $_POST['data_nascimento'];
		$rg = $_POST['rg'];
		$num_inscricao = $_POST['ins_ifsc'];
		$sexo = $_POST['sexo'];
		$cidade = $_POST['slc_cidade'];
		$modalidade = $_POST['slc_modalidades'];
		$equipe = $_POST['slc_equipe'];

		$atleta = new atleta();
		$atleta->set_nome($nome);
		$atleta->set_data_nascimento($data_nascimento);
		$atleta->set_rg($rg);
		$atleta->set_num_inscricao($num_inscricao);
		$atleta->set_cidade($cidade);
		$atleta->set_sexo($sexo);
		$atleta->set_modalidade_praticada($modalidade);
		$atleta->set_equipe($equipe);

		$atletaDAO = new atletaDAO();
		$mod = $atletaDAO->insert_atleta($atleta);

		if ($mod == 1) {
			header("location: ../view/cadastramento_atleta.php?swal=True");
		}
		else{
			header("location: ../view/cadastramento_atleta.php?swal=False");	
		}
	}