<?php
namespace src\controllers;

use src\models\User;

class AuthController {
    
    public function loginForm() {
        
        require __DIR__ . '/../Views/auth/login.php';
    }

    
    public function loginAction() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($senha, $user['senha_hash'])) {
            session_start();
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];
            
            redirect(base_url('dashboard'));
        } else {

            $error = "E-mail ou senha inválidos";
            require __DIR__ . '/../Views/auth/login.php';
        }
    }

    public function registerAction() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $userModel = new User();

        if ($userModel->emailExists($email)) {
            $error = "E-mail já cadastrado";
            require __DIR__ . '/../Views/auth/register.php';
            return;
        }

        if ($userModel->create($nome, $email, $senha)) {
            redirect(base_url('login'));
        } else {
            die("Erro ao cadastrar");
        }
    }
}