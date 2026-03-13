<?php

include "conexao.php";

class Action{

    public function cadastrar(Data $data): void {
    
    $bd = new Conexao();
    $con = $bd->getConexao();
       
    $sql = "UPDATE pessoa SET nome_pessoa = dog WHERE id_pessoa = ?";


    $stm = $con->prepare($sql);
    $stm->bindValue(1, $data->getNome());
    $return = $stm->execute();
    
if($return){
    echo "cadastrado com sucesso";
}else{
    echo"erro";
    }

}
}




?>