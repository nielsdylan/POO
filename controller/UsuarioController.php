<?php

// header('Content-Type: application/json; charset=utf-8');


require_once __DIR__ . '/../models/Usuario.php';

$accion = $_GET['accion'] ?? 'listar';

try {
    $usuarioModel = new Usuario();

    switch ($accion) {
        case 'listar':
            $usuarios = $usuarioModel->obtenerTodos();
            echo json_encode([
                'ok'   => true,
                'data' => $usuarios
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