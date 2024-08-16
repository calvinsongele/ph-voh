<?php
#[AllowDynamicProperties]
class Database {  

    private $server = DB_HOST;
    private $username= DB_USER;
    private $password = DB_PASS;
    private $dbName = DB_NAME; 

    public function connection() { //PDO connection
           
        try {
            $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("<div style='padding:20px;margin-top:10%; background:lightgrey' class='shadow'> <h1 style='background:grey;margin:10px;' >Connection failed...</h1> 
            <p> There are too many users online. Please refresh the page or try again after a few seconds.</p>
            <hr>
            {$e->getMessage()}
            </div>");
             
        }
       
    }
    public function db_mysqli() {
        $conn = new mysqli($this->server, $this->username, $this->password, $this->dbName );
        if ($conn->connect_error) {
            die("<div style='padding:20px;margin-top:10%; background:lightgrey' class='shadow'> <h1 style='background:grey;margin:10px;' >Connection failed...</h1> 
            <p> There are too many users online. Please refresh the page or try again after a few seconds.</p></div>");
            die("Connection failed.. There are too many users online. Please refresh the page or try again after a few seconds.");
       
        }
        return $conn;
    }
    
    
    
    
    
    
    
    
    
    
    
    ///////////////////////
}