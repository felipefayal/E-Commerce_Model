<?php
namespace src\models;

use src\config\database;
use PDO;

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        
        $stmt = $this->db->prepare("INSERT INTO usuarios (nome, email, senha_hash) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $email, $senhaHash]);
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function emailExists($email) {
        return (bool) $this->findByEmail($email);
    }
}