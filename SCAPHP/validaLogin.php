<?php

require_once "../SCAPHP/models/user.php";


if (isset($_SESSION)) {
    session_destroy();
}

session_start();

$usuarios = [
    new User('ricardo@gmail.com', '99923'),
    new User('joao@hotmail.com', '33421'),
    new User('perry@ornitorrinco.com', '4321')
];

foreach ($usuarios as $currentUser) {
    if ($currentUser->validatePassword($_POST["senha"]) && $currentUser->getEmail() == $_POST["email"]) {
        $_SESSION['logged_in'] = true;
        $_SERVER['usuario'] = $_POST['email'];
        header('Location: index.php');
        exit;
    } $erroLogin = 'Verifique seu login e tente novamente.';
    }
    header('Location: login.php?erro=' . urlencode($erroLogin));
exit;
?>