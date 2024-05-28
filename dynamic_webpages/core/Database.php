<?php

class Database {
    public $connection;

    public function __construct($config) {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        //$dsn = "mysql:host={$config['host']};port='5500';dbname={$config['dbname']}";

        $this->connection = new PDO($dsn, 'root');
    }

    public function query($query, $params = []) {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}