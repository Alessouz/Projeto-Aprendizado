<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$banco = "gestaoEducar";
$port = 3308;

try {
    // Conexao com a porta
    $conn = new \pdo ("mysql:host=$host; port=$port; dbname=$banco", $user, $senha);
    // echo "Conexao com o banco de dados realizado com sucesso";
} catch (\PDOException $e) {
    // echo "Error: conexão com o banco de dados não realixada com sucesso" . $e->getMessage();
}