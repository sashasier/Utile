<?php
session_start();

require '../login.php';

define('DB_PATH', '../json/usuarios.json');

$errores = [];

//Validación
$username = trim($_POST['username']);
if (empty($username)) {
	$errores['username'] = 'El nombre de usuario es obligatorio';
}

$password = trim($_POST['password']);
if (empty($password)) {
	$errores['password'] = 'La contraseña es obligatoria';
}

if ($errores) {
	$_SESSION['errores'] = $errores;
	$_SESSION['inputsValues'] = $_POST;
	header('Location: ../login.php');
	exit;
}
