<?php

   class DB
   {
          // On specifie notre base donnée
    private $host = "localhost";
    private $database = "mydb";
    private $username = "root";
	private $password = "";
    public $connexion;
    
          // fonction pour connecter
          public function __construct(){
            $this->connexion = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->username,$this->password);  
          }
            }
        
?>