<?php

class Database {
        // DB Params
        private $host = 'localhost:3330';
        private $db_name = 'myblog';
        private $username = 'root';
        private $password = 'khunTun1997';
        private $conn;

        // DB connect
        public function connect(){
                $this->conn = null;

                try{
                        $this->conn = new PDO('mysql:host=' .  $this->host  . ';dbname=' . $this->db_name, $this->username,$this->password);
                        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e) {
                        echo 'Connect error' . $e->getMessage();
                }

                return $this->conn;
        }
}



?>