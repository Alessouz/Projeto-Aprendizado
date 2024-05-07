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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header class="d-flex justify-content-between border-bottom border-1">
        <h1 class="logo"><a href="../index.php">Pefil</a></h1>
        <div class="dropdown">
            <button class="btn btn-secondary rounded-circle m-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user" style="color: #ffffff;"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><?php echo $usuario['usuario']; ?></a></li>
                <li><a class="dropdown-item" href="#">#</a></li>
                <li><a class="dropdown-item" href="#">#</a></li>
                <li><a class="dropdown-item" href="#" onclick="logout()">Logout</a></li>
            </ul>
        </div>
    </header>

    <section>
        <span class="alerta">Senha alterada com Sucesso</span>
    </section>

    <main>
        <div class="perfil-container">
            <div class="border rounded-circle perfil-img">
                <i class="fa-solid fa-user"></i>
            </div>
            <p class="form-control"><?php echo $admin ?></p>
            <p class="form-control">Usuario: <?php echo $usuario['usuario'] ?></p>
            <p class="form-control">Nome: <?php echo $usuario['nome'] ?></p>
            <p class="form-control">Email: <?php echo $usuario['email'] ?></p>
            <p class="form-control alterar" onclick="alterarSenha()">Alterar Senha</p>
        </div>
    </main>

    <script>
        function alterarSenha() {
            window.location.href = "password.php";
        }
    </script>

    <script src="../assets/js/logout.js"></script>
    <script src="https://kit.fontawesome.com/9f9c884ad5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>