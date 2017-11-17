<?php
if (!isset($CONFIG)) include '../../.git/config';
//include $CONFIG['include'] . 'php/validators/registro.validator.php';
include $CONFIG['include'] . '../classes/validador.php';
include $CONFIG['include'] . '../classes/Usuario.php';

//$errors = validarRegistro();
$errors = validarInformacion();

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
