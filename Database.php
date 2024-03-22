<?php

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
     * 
     * @return PDOStatement
     * @throws PDOException
     */
    public function query($query)
    {
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute();
            return $stm;
        } catch (PDOException $e) {
            throw new Exception("Query failed to excute {$e->getMessage()}");
        }
    }
}