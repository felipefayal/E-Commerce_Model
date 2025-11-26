<?php

function redirect($url) {
    header("Location: {$url}");
    exit;
}

function base_url($path = '') {
    
    $base = 'http://localhost/ecommerce/public'; 
    return $base . '/' . ltrim($path, '/');
}

function dd($data) {
    echo "<pre style='background: #111; color: #0f0; padding: 20px;'>";
    var_dump($data);
    echo "</pre>";
    die();
}

function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}