<?php

date_default_timezone_set('America/Sao_Paulo');

class Conexao {

    private $user;

    private $pass;

    private $host;

    private $base;

    private $file;

    public $conn;



    public function Connect() {

	try{

        $this->user = "root";

        $this->pass = "";

        $this->host = "127.0.0.1";
		//$this->base = "banda";
		$this->base = "LUCAS";


        $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"); //Definimos a conexão com o banco no padrão URF-8



        /*$this->file = "mysql:host=" . $this->host . ";dbname=" . $this->base;

        $this->conn = new PDO($this->file, $this->user, $this->pass, $parametros);



        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $this->conn->setAttribute(PDO::ATTR_PERSISTENT, true);*/
		
		$this->conn = new PDO('mysql:host=localhost;dbname=LUCAS', $this->user, $this->pass);

        if (!$this->conn) {

          echo "Erro na conexão";

        }

        return $this->conn;

		}catch(PDOException $ex){

		echo "Erro no sistema" . $ex->getMessage();

		}

    }

}

?>
