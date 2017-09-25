<?php
session_start();

require '../login.php';

define('DB_PATH', '../json/usuarios.json');

$errores = [];

//Validación
$username = trim($_POST['nombre']);
if (empty($username)) {
	$errores['nombre'] = 'El nombre de usuario es obligatorio';
}

$password = trim($_POST['password']);
if (empty($password)) {
	$errores['password'] = 'El password es obligatorio';
}

if ($errores) {
	$_SESSION['errores'] = $errores;
	$_SESSION['inputsValues'] = $_POST;
	header('Location: ../registro.php');
	exit;
}

$username[
	'username' => $username,
	'password' => password_hash($password, PASSWORD_DEFAULT),
]
