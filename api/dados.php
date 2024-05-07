<?php

$email = $_SESSION['email'];

$query = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $conn->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();
$usuario = $stmt->fetch();