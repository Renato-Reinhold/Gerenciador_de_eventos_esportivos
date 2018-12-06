<?php 

	class Carregar_selects extends database
	{
		
		function carregar_modalidades(database $conexao)
		{

			try{

				$sql = $conexao->query("select * from modalidades");
		
			}
			catch(PDOException $e){
				echo $e ->getMessage() . '</br>';
	            exit;
			}
			
			foreach ($sql as $modalidades) {
				echo "<option value=". $modalidades['mod_id'] .">" . utf8_encode($modalidades['mod_nome']) . "</option>";
			}
		}

		function carregar_cidades(database $conexao)
		{
			try{

				$sql = $conexao->query("select * from cidades");

			}
			catch(PDOException $e){
				echo $e -> getMessage() . '</br>';
				exit;
			}

			foreach ($sql as $cidades) {
				echo "<option value=" . $cidades['cid_id'] . ">" . utf8_encode($cidades['cid_nome']) . "</option>";
			}
		}
	}