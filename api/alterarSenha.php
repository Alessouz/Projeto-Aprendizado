<?php
session_start();
require('../database/conexao.php');

// Recebe os dados do formulário
$senhaAtual = $_POST['antigaSenha'];
$novaSenha = $_POST['novaSenha'];
$confirmarSenha = $_POST['confirmarSenha'];

// Verifica se as senhas nova e confirmar senha são iguais
if (!empty($senhaAtual)) {
    // Recupera o ID do usuário da sessão
    $email = $_SESSION['email'];
}

    // Consulta SQL para selecionar a senha atual do usuário
    $query = "SELECT senha FROM usuarios WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultado = $stmt->fetch();

    // Verifica se a senha atual inserida corresponde à senha do banco de dados
    if ($resultado && $senhaAtual == $resultado['senha']) {

        // Atualiza a senha no banco de dados
        $queryUpdate = "UPDATE usuarios SET senha = :novaSenha WHERE email = :email";
        $stmtUpdate = $conn->prepare($queryUpdate);
        $stmtUpdate->bindParam(':novaSenha', $novaSenha);
        $stmtUpdate->bindParam(':email', $email);
        if ($stmtUpdate->execute()) {
            echo "senha alterada";
        } else {
            echo "Erro ao alterar a senha.";
        }
    } else {
        $mensagem = "A senha atual está incorreta.";
    }


