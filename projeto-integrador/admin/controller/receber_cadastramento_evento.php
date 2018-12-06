<?php

	include_once "../model/Evento.php";
	include_once "../model/EventoDAO.php";

	include_once "../model/Torneio.php";
	include_once "../model/TorneioDAO.php";

	include_once "../model/Chave.php";
	include_once "../model/ChaveDAO.php";

	include_once "../model/Equipe.php";

	#dados do evento
	$nome = $_POST['nome'];
	$local_torneios = $_POST['local_torneios'];
	$data = $_POST['data'];

	#dados dos torneios por evento
	$qtd_torneios = $_POST['qtd_torneios'];

	$torneios = array();
	$chaves = array();

	for ($i=1; $i <= $qtd_torneios; $i++) {

		$modalidade = $_POST['modalidade' . $i];
		$equipes = $_POST['equipes' . $i];
		
		#criação das chaves e chaveamento das partidas
		$chave = new Chave();
		$chaves = $chave->chaveamento_automatico($equipes);

		#criação do torneio
		$torneio = new Torneio();
		$torneio->set_modalidade($modalidade);
		$torneio->set_chaves($chaves);

		#inserção do torneio no banco de dados
		$TorneioDAO = new TorneioDAO();
		$TorneioDAO->insert_torneio($torneio);

		#inserção das chaves no banco de dados
		$chaveDAO = new ChaveDAO();
		foreach ($chaves as $key => $c) {
			$chaveDAO->insert_chaves($chaves[$key]);
		}
		
		
		#adicionando os torneios em um array para adicionar no evento
		$torneios[$i] = $torneio;
		
	}
	var_dump($equipes);
	
	#criação do evento e setando suas caracteristicas
	$evento = new Evento();
	$evento->set_nome($nome);
	$evento->set_local_torneios($local_torneios);
	$evento->set_data($data);
	$evento->set_torneios($torneios);
	
	$eventoDAO = new EventoDAO();
	$result = $eventoDAO->insert_eventos($evento);

	if ($result == 1) {
		header("location: ../view/cadastramento_evento.php?swal=True");
	}
	else{
		header("location: ../view/cadastramento_evento.php?swal=False");	
	}