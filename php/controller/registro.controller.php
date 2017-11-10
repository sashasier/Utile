<?php
if (!isset($CONFIG)) include '../config.php';
include $CONFIG['include'] . 'php/validators/registro.validator.php';
include $CONFIG['include'] . 'php/classes/Usuario.php';

$errors = validarRegistro();

//si hay errores conrto la ejecucion y los devuelvo
if (count($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: '.$CONFIG['url'].'registro.php');
    exit;
}

$usuario = new Usuario($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['edad']);
$usuario->save();
exit();

//login
$_SESSION['login'] = true;
$_SESSION['usuario'] = $usuario;
header('Location: '.$CONFIG['url'].'perfil.php');
