<?php
$id = filter_input(INPUT_POST, var_name: "id" );
$nome = filter_input(INPUT_POST, var_name: "nome" );
$botao = filter_input(INPUT_POST, var_name: "botao" );
//filter_input carrega um valor vazio e não da bug
include 'data.php';

$data = new Data();
$data->setID($id);
$data->setNome($nome);
//pegou o valor e armazenou na variavel nome


include "action.php";
$action = new Action();


if ($botao=="CADASTRAR"){
    $action->cadastrar($data);
}else if($botao=="APAGAR"){
    $action->deletar($data);
}else if ($botao=="ATUALIZAR"){
     $action->atualizar($data);
}else if($botao=="CONSULTAR"){
     $action->consultar($data);

    
}



//foreach($action->consultar() as $consulta ){
  //  echo $consulta['id'];
    //echo $consulta['nome'];
   // }

?>
