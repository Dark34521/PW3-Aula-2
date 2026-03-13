<?php

include "conexao.php";

class Action{

    public function cadastrar(Data $data): void {
    
    $bd = new Conexao();
    $con = $bd->getConexao();
       
    $sql ="insert into pessoa (nome_pessoa) values (?)";
    $stm = $con->prepare(query:$sql);
    $stm->bindValue(1, $data->getNome());
    $return = $stm->execute();
    
if($return){
    echo "cadastrado com sucesso";
}else{
    echo"erro";
    }

}

public function atualizar(Data $data): void {
    
    $bd = new Conexao();
    $con = $bd->getConexao();
       
    $sql ="update pessoa set nome=? where id=?";
    $stm = $con->prepare(query:$sql);
    $stm->bindValue(1, $data->getNome());
    $stm->bindValue(2, value: "Id");
    $return = $stm->execute();
    
if($return){
    echo "atualizado com sucesso";
}else{
    echo"erro";
    }

}

public function deletar(Data $data): void {
    
    $bd = new Conexao();
    $con = $bd->getConexao();
       
    $sql ="delete from pessoa where nome_pessoa=?";
    $stm = $con->prepare(query:$sql);
    $stm->bindValue(1, $data->getNome());
    $return = $stm->execute();
    
if($return){
    echo "deletado com sucesso";
}else{
    echo"erro";
    }

}
}




?>