<?php

class Action{

    public function print(Data $data): void {
    echo "você é\n";    
    echo $data->getNome();
       
    }

}




?>