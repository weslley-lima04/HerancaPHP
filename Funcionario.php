<?php


class Funcionario extends Pessoa
{
	public $salario;
	public $cargo;


	function ObterSalario()
	{
		echo $this->salario;
	}

	function ImprimeDados()
	{
		echo $this->cargo;
		echo $this->salario;
		parent::ImprimeDados();
	}

	function __constructor($salario, $cargo)
	{
		$this->salario = $salario;
		$this->cargo = $cargo;

	}


}




?>