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
    ////////////////////////////////////////////////////////////
    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Cập nhật token reset mật khẩu
     */
    public function updateResetToken($email, $tokenHash, $expiry) {
        $sql = "UPDATE users SET reset_token_hash = ?, reset_token_expores_at = ? WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sss", $tokenHash, $expiry, $email);
        return $stmt->execute();
    }

    /**
     * Tìm người dùng bằng token reset mật khẩu
     */
    public function findByResetToken($tokenHash) {
        $sql = "SELECT * FROM users WHERE reset_token_hash = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $tokenHash);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Cập nhật mật khẩu mới
     */
    public function updatePassword($userId, $newPassword) {
        $sql = "UPDATE users SET password = ?, reset_token_hash = NULL, reset_token_expores_at = NULL WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("si", $newPassword, $userId);
        return $stmt->execute();
    }
}
