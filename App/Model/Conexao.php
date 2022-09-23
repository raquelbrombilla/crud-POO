<?php

namespace App\Model;

class Conexao {

    private static $instance;

    public static function getConexao() {

        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:dbname=crudpoo;host=localhost;charset=UTF8', 'root', '');
        }

        return self::$instance;
    }

}