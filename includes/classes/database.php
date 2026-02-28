<?php

namespace Portfolio_Ramona_Lozon;

use PDO;

class database
{
    public function query(string $query, array $bindings = []): array
    {
        $connection = $this->connect();
        $statement = $connection->prepare($query);
        foreach ($bindings as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $status = $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }
 
    public function execute(string $query, array $bindings = []): bool
    {
        $connection = $this->connect();
        $statement = $connection->prepare($query);
        foreach ($bindings as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function connect()
    {
        return new PDO($this->getDsn(), $this->getConfig()['username'], $this->getConfig()['password']);
    }

    public function lastInsertId()
    {
        return $this->connect()->lastInsertId();
    }

    public function getConfig()
    {
        //web
        // return [
        //     'username' => 'thede519_txtp126',
        //     'password' => 'b1lly-g0@t',
        //     'host' => 'localhost',
        //     'database' => 'thede519_portfolio_case_file',
        //     'port' => '3306'
        // ];

        //local
        return [
            'username' => 'root',
            'password' => '',
            'host' => 'localhost',
            'database' => 'portfolio_case_file',
            'port' => '3306'
        ];
    }

    public function getDsn()
    {
        $config = $this->getConfig();
        $host = $config['host'];
        $database = $config['database'];
        $port = $config['port'];

        return 'mysql:host=' 
            . $host 
            . ';dbname=' 
            . $database 
            . ';port=' 
            . $port 
            . ';';
    }
}