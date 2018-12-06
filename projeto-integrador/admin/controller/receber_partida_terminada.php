<?php

	include_once "../model/AtletaDAO.php";
	include_once "../model/EquipeDAO.php";


	$evento = $_GET['evento'];

	for ($i=0; $i < $_POST['qtd_equipe_a']; $i++) { 

		$atleta = $_POST['id_atleta_a' . $i];
		$cartao_amarelo = $_POST['amarelo_a' . $i];
		$cartao_vermelho = $_POST['vermelho_a' . $i];
		$gols = $_POST['gols_a' . $i];
		
		$atletaDAO = new AtletaDAO();

		$atletaDAO->insert_estatisticas($atleta, $cartao_amarelo, $cartao_vermelho, $gols);
	}

	for ($i=0; $i < $_POST['qtd_equipe_b']; $i++) { 

		$atleta = $_POST['id_atleta_b' . $i];
		$cartao_amarelo = $_POST['amarelo_b' . $i];
		$cartao_vermelho = $_POST['vermelho_b' . $i];
		$gols = $_POST['gols_b' . $i];

		$atletaDAO = new AtletaDAO();

		$atletaDAO->insert_estatisticas($atleta, $cartao_amarelo, $cartao_vermelho, $gols);
	}

	$equipe_a = $_POST['id_equipe_a'];
	$equipe_b = $_POST['id_equipe_b'];
	$pontos_equipe_a = $_POST['pontos_equipe_a'];
	$pontos_equipe_b = $_POST['pontos_equipe_b'];

	$equipeDAO = new EquipeDAO();

	if($pontos_equipe_a > $pontos_equipe_b){
		$equipeDAO->insert_estatisticas($equipe_a, 1, 0, 0, $pontos_equipe_a, $_GET['evento'], $_GET['torneio']);
		$equipeDAO->insert_estatisticas($equipe_b, 0, 1, 0, $pontos_equipe_b, $_GET['evento'], $_GET['torneio']);
	}
	elseif ($pontos_equipe_a < $pontos_equipe_b) {
		$equipeDAO->insert_estatisticas($equipe_a, 0, 1, 0, $pontos_equipe_a, $_GET['evento'], $_GET['torneio']);
		$equipeDAO->insert_estatisticas($equipe_b, 1, 0, 0, $pontos_equipe_b, $_GET['evento'], $_GET['torneio']);
	}
	else{
		$equipeDAO->insert_estatisticas($equipe_a, 0, 0, 1, $pontos_equipe_a, $_GET['evento'], $_GET['torneio']);
		$equipeDAO->insert_estatisticas($equipe_b, 0, 0, 1, $pontos_equipe_b, $_GET['evento'], $_GET['torneio']);
	}


	header("Location: ../view/Sumula_view.php?chave=" . $_GET['chave']);

