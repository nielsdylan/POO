<?php
$page = $_GET['page'] ?? 'home';
$vistas_permitidas = ['home', 'shop', 'about', 'care', 'cart', 'product'];

// Valor por defecto seguro
$vista = __DIR__ . '/views/home.php';

if (in_array($page, $vistas_permitidas, true)) {
    if (file_exists(__DIR__ . "/views/{$page}.php")) {
        $vista = __DIR__ . "/views/{$page}.php";
    } elseif (file_exists(__DIR__ . "/views/{$page}.html")) {
        $vista = __DIR__ . "/views/{$page}.html";
    }
}

include __DIR__ . '/layouts/app.php';
