<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main-container {
            display: flex;
            height: 100vh;
        }

        .metade {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .metade img {
            max-width: 100%;
            max-height: 100%;
            height: 100%;
        }

        .main-container>div {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .erro {
            border: 1px solid #ff6961;
        }

        #error,
        .credencial {
            color: #ff6961;
            font-size: .8rem;
            display: none;
        }

        .form-container form {
            margin: 10px 0 10px 0;
        }

        .form-container form input {
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        #loginBtn {
            border: none;
            background-color: blue;
            margin: 8px 0 5px 0;
            padding: 7px;
            border-radius: 5px;
            color: #fff;
            font-weight: 500;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>

    <main class="main-container">
        <div class="metade">
            <img src="../assets/img/img.webp" alt="">
        </div>
        <div class="form-container">
            <h1>Registro</h1>
            <form>
                <input type="text" name="nome" id="nome" placeholder="Digite seu Nome">
                <input type="text" name="usuario" id="usuario" placeholder="Crie um usuario">
                <input type="email" name="email" id="email" placeholder="Digite seu melhor E-mail">
                <input type="password" name="senha" id="senha" placeholder="Crie uma Senha">
                <button id="loginBtn">Cadastrar</button>
            </form>

            <span>Ja possui uma conta <a href="../index.php">Faça Login!</a></span>

            <span id="error">Campos obrigatorios</span>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>