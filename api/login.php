<?php

session_start();
require('../database/conexao.php');

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

$login = $conn->prepare($query);
$login->execute();

if ($login->rowCount() > 0) {
    echo "Login bem-sucedido";
    $_SESSION['email'] = $email;
    $_SESSION['logado'] = true;
} else {
    echo "Credenciais inválidas";
}