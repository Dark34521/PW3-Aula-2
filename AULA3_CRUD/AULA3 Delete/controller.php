<?php

$nome = filter_input(INPUT_POST, var_name: "nome" );
//filter_input carrega um valor vazio e não da bug
include 'data.php';

$data = new Data();

$data->setNome($nome);
//pegou o valor e armazenou na variavel nome


include "action.php";

$actiom = new Action();

$actiom->cadastrar($data);
?>