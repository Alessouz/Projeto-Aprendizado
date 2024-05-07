<?php
session_start();
require('../database/conexao.php');
require('../api/dados.php');

if (!isset($_SESSION['email'])) {
    header('Location: ../index.php');
    exit();
}

if ($usuario['is_admin'] == 1) {
    $admin = 'Voce é admin';
} else {
    $admin = 'Voce não é admin';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Perfil</title>
    <link rel="stylesheet" href="assets/css/redefinir.css">
</head>

<body>

    <main>
        <div class="perfil-container">
            <h1>Redefinir Senha</h1>
            <form action="">
                <input id="antigaSenha" name="antigaSenha" class="input" type="text" placeholder="Antiga Senha">
                <input id="novaSenha" name="novaSenha" class="input" type="text" placeholder="Nova Senha">
                <input id="confirmarSenha" name="confirmarSenha" class="input" type="text" placeholder="Confirmar Senha">
                <button id="alterar" class="btn btn-primary mt-3">Alterar</button>
            </form>
        </div>
    </main>

    <script>
        function alterar() {
            var $antigaSenha = $('#antigaSenha').val();
            var $novaSenha = $('#novaSenha').val();
            var $confirmarSenha = $('#confirmarSenha').val();

            if ($antigaSenha == "" || $novaSenha == "" || $confirmarSenha == "") {
                console.log('campos obrigatorios');
            }

            if (novaSenha !== confirmarSenha) {
                console.log('As senhas não coincidem');
            } else {
                $.post("../api/alterarSenha.php", $('#senhaForm').serialize())
                    .done(function(result) {
                        if (result == 'senha_alterada') {
                            console.log('Senha alterada com sucesso.');
                        } else {
                            console.log('Erro ao alterar a senha.');
                        }
                    });
            }
        }

        $('#alterar').click(function(e) {
            e.preventDefault();

            var $antigaSenha = $('#antigaSenha').val();
            var $novaSenha = $('#novaSenha').val();
            var $confirmarSenha = $('#confirmarSenha').val();

            if ($antigaSenha == "" || $novaSenha == "" || $confirmarSenha == "") {
                console.log('campos obrigatorios');
            } else if ($novaSenha.trim().toLowerCase() !== $confirmarSenha.trim().toLowerCase()) {
                console.log('As senhas não coincidem');
            } else {
                $.post("../api/alterarSenha.php", {antigaSenha: $antigaSenha, 
                                                    novaSenha: $novaSenha, 
                                                    confirmarSenha: $confirmarSenha})
                    .done(function(result) {
                        if (result == 'senha alterada') {
                            alert("Senha alterada com sucesso");
                            window.location.href = "index.php";
                        } else {
                            console.log('Erro ao alterar a senha!');
                        }
                    });
            }
        });
    </script>

    <script src="https://kit.fontawesome.com/9f9c884ad5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>