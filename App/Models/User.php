<?php

namespace App\Models;

use Framework_Tu_Code\Database;

class User
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function selectByPhoneNumber($params)
    {
        return  $this->db->query("SELECT * FROM users WHERE phone_number = :phone_number", $params)->fetch();
    }

    public function selectByEmail($params)
    {
        return  $this->db->query("SELECT * FROM users WHERE email = :email", $params)->fetch();
    }

    public function selectByID($userId)
    {
        return $this->db->query("SELECT * FROM users WHERE id = :id", ['id' => $userId])->fetch();
    }

    public function insert($params)
    {
        $this->db->query(
            "INSERT INTO users 
                (fullname, phone_number, email, address, password, role_id)
            VALUES
                (:fullname, :phone_number, email, :address, :password, 2)
        ",
            $params
        );
    }

    public function getNewInsertedUserID()
    {
        return $this->db->conn->lastInsertId();
    }
}
