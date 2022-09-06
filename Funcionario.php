<?php


class Funcionario extends Pessoa
{
	public salario;
	public cargo;


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


}




?>