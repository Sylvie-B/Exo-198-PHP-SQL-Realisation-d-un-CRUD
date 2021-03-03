<?php


class DbObj
{
    private string $server;
    private string $db;
    private string $user;
    private string $pass;

    public function __construct()
    {
        $this->server='localhost';
        $this->db='exo198';
        $this->user = 'root';
        $this->pass = '';
    }

    public function connect(): ?PDO {
        try {
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception){
            echo "data base connexion error : ".$exception->getMessage();
            return null;
        }
        return $conn;
    }
}
