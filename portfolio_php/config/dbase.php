<?php
// Configuração de conexão PDO com MySQL

$DB_HOST = 'localhost';
$DB_NAME = 'servicos_pro';
$DB_USER = 'root';
$DB_PASS = '';

$dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Exceções em erros
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch padrão como array associativo
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Prepared statements nativos
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (PDOException $e) {
    http_response_code(500);
    die('Falha na conexão com o banco de dados. Verifique ajustes/config.php. Detalhes: ' . $e->getMessage());
}