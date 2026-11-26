<?php

require_once __DIR__ . '/../db/Conexion.php';

class Usuario
{
    private PDO $db;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }

    public function obtenerTodos(): array
    {
        $stmt = $this->db->query("SELECT id, nombre, correo, clave FROM usuarios");
        return $stmt->fetchAll();
    }

    public function buscarPorId(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT id, nombre, correo FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $resultado = $stmt->fetch();

        return $resultado ?: null;
    }
}