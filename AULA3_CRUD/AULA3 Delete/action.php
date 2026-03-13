<?php

include "conexao.php";

class Action{

    public function cadastrar(Data $data): void {
    
    $bd = new Conexao();
    $con = $bd->getConexao();
       
    $sql ="DELETE FROM pessoa WHERE id_pessoa = ?";


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