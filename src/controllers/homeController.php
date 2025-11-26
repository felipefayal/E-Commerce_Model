<?php

namespace src\controllers;

class HomeController {
    
    public function index() {
        
        $title = "Início | E-Commerce";
        
        require __DIR__ . '/../views/home.php';
    }

    public function teste() {
        echo "<h1>Teste de Rota!</h1><p>Se você está vendo isso, o Router funciona.</p>";
    }
}