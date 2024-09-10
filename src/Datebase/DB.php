<?php
namespace Src\Datebase;

class DB{

    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = null;
    const DATEBASE = 'php_projekt';
    protected $mysqli;
    function __construct($host = self::HOST, $user = self::USER, $password = self::PASSWORD, $datebase = self::DATEBASE){
        $this->mysqli = mysqli_connect($host, $user, $password, $datebase);

        if(!$this->mysqli){
            die("Connection failed: ".mysqli_connect_error());
        }
        $this->mysqli->set_charset("utf8mb4");
    }

    function __destruct(){
        $this->mysqli->close();
    }
}
  