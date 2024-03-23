<?php

namespace Framework_Tu_Code;

use PDO;
use PDOException;
use Exception;

class Database{
    public $conn;

    /**
     * Contructor for Database class
     *
     * @param array $config
     * 
     * @return void
     */
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: {$e->getMessage()}");
        }
    }

    /**
     * Query data in database
     *
     * @param string $query
     * @param array $params
     * 
     * @return PDOStatement
     * @throws PDOException
     */
    public function query($query, $params = [])
    {
        try {
            $stm = $this->conn->prepare($query);

            foreach ($params as $param => $value) {
                $stm->bindValue(':'.$param, $value);
            }

            $stm->execute();
            return $stm;
        } catch (PDOException $e) {
            throw new Exception("Query failed to excute {$e->getMessage()}");
        }
    }
}