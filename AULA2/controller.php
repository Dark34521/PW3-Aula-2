<?php

$nome = filter_input(INPUT_POST, var_name: "nome" );

include 'data.php';

$data = new Data();

$data->setNome($nome);

include "action.php";

$actiom = new Action();

$actiom->print($data);
?>