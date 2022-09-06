<?php


class Pessoa

{
	public $nome;
	public $endereco;
	public $idade;

	function ImprimeDados()
	{
		echo $this->nome."/n";
		echo $this->endereco."/n";
		echo $this->idade."/n";
	}

	function __constructor($nome, $endereco, $idade)
	{
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->idade = $idade;

	}


}







?>