<?php

// header('Content-Type: application/json; charset=utf-8');


require_once __DIR__ . '/../models/Usuario.php';

$peticion = $_GET['peticion'];
$peggi = $_GET['peggi'];
$culito = $_GET['culito'];

try {
    $usuarioModel = new Usuario();

    switch ($peticion) {
        case 'listar':
            $usuarios = $usuarioModel->obtenerTodos();
            echo json_encode([
                'ok'   => true,
                'data' => $usuarios
            ]);
            break;

        case 'todos':
            $usuarios = $usuarioModel->obtenerTodos();
            echo json_encode([
                'ok'   => true,
                'data' => "negritas"
            ]);
            break;

        default:
            http_response_code(400);
            echo json_encode([
                'ok'    => false,
                'error' => 'Acción no válida'
            ]);
            break;
    }
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'ok'    => false,
        'error' => 'Error interno del servidor'
    ]);
}