<?php 

class Evento
{

	private $id;
	private $nome;
	private $local_torneios;
	private $data;
	private $torneios;

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
	function get_data(){
		return $this->data;
	}
	function set_data($data){
		$this->data = $data;
	}
	function get_local_torneios(){
		return $this->local_torneios;
	}
	function set_local_torneios($local_torneios){
		$this->local_torneios = $local_torneios;
	}
	function get_torneios()
	{
		return $this->torneios;
	}

	function set_torneios($torneios)
	{
		$this->torneios = $torneios;
	}

}