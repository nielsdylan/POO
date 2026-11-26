<?php

class Conexion
{
    private string $host = 'localhost';
    private string $db   = '2026-11-25-POO';
    private string $user = 'root';
    private string $pass = '';
    private string $charset = 'utf8mb4';
    private ?PDO $pdo = null;

    public function conectar(): PDO
    {
        if ($this->pdo !== null) {
            return $this->pdo;
        }

        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $opciones);
            return $this->pdo;
        } catch (PDOException $e) {
            // En producción conviene registrar el error en un log y mostrar un mensaje genérico
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}