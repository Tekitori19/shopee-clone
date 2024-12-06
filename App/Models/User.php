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
                (:fullname, :phone_number, :email, :address, :password, 2)
        ",
            $params
        );
    }

    public function getNewInsertedUserID()
    {
        return $this->db->conn->lastInsertId();
    }

    public function selectByEmailAndPassword($params)
    {
        return $this->db->query("SELECT * FROM users WHERE email = :email AND password = :password", $params)->fetch();
    }

    public function updateUser($params)
    {
        return $this->db->query(
            "UPDATE users 
            SET 
            fullname = :fullname, 
            phone_number = :phone_number, 
            email = :email, 
            address = :address
            WHERE id = :id",
            $params
        );
    }

    public function resetPassword($params)
    {
        $sql = "UPDATE users
        SET reset_token_hash = :token,
            reset_token_expires_at = :expiry
        WHERE email = :email";
        return $this->db->query($sql, $params)->rowCount();
    }

    public function selectByResetToken($params)
    {
        // date_default_timezone_set('Asia/Ho_Chi_Minh');
        return $this->db->query(
            "SELECT * FROM users 
            WHERE reset_token_hash = :token AND reset_token_expires_at > :current_time",
            [...$params, 'current_time' => date('Y-m-d H:i:s')]
        )->fetch();
    }

    public function updateUserPasswordByToken($params)
    {
        $this->db->query(
            "UPDATE users 
            SET password = :password, reset_token_hash = NULL, reset_token_expires_at = NULL
            WHERE id = :id",
            $params
        );
    }
}
