<?php

if (!isset($CONFIG)) include 'config.php';
include $CONFIG['include'] . 'php/helpers/usuario.helper.php';
include $CONFIG['include'] . 'php/validators/login.validator.php';

if (isset($_POST['recordarme'])) {
    //recordar usuario
    saveCookie('usuario', $usuario['email']);
}

//login
$_SESSION['login'] = true;
$_SESSION['usuario'] = $usuario;
header('Location: '.$_SERVER['HTTP_REFERER']);
