<?php
    
    class Database {
        public $connection;
        public $statement;
        
        public function __construct($config, $username = 'root', $password = '') {
            // $dsn = 'mysql:host=localhost;port=3306;dbname=databasename';
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            // create a new PDO connection
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        
        public function query($query, $params = [])
        {
            $this->statement = $this->connection->prepare($query);
            
            $this->statement->execute($params);
            
            return $this;
        }

        public function find()
        {
            return $this->statement->fetch();
        }

        public function fetch(){
            return $this->statement->fetchAll();
        }
        
    }