
<?php

Class Conexao {

public static $instancia;
public static function GetConexao(){

        if(!isset(self::$instancia)){
//conexão PDO
            self::$instancia=
            new PDO(dsn: 
            'mysql:host=localhost;
            dbname=conecta;
            charset=utf8',

            username: 'root',
            password: 'root');


             return self::$instancia;
        }else{
            return self::$instancia;
        }
    }
}

