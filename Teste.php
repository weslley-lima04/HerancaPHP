<?php

include_once 'Pessoa.php';
include_once 'Funcionario.php';


$pessoa = new Pessoa("José", "Av. Interlagos", 25);
$func = new Funcionario("Senior", 4.500);

$func->ImprimeDados();


?>