<?php

//require '../login.php';

define('DB_PATH', '../json/usuarios.json');
include 'helpers.php';
$errores = [];

if ($_POST) {
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
		// header('Location: login.php');
		// exit;
	}

	$usuario = getUserByUsername($username, 'json/usuarios.json');

		if ($usuario !== false) {
			if (password_verify($password, $usuario['password'])) {
					$_SESSION['login'] = true;
			}else {
					$errores['password'] = 'El password no coinicide';
			}

		} else {
		  $errores['usuario'] = 'El usuario no existe';
		}

}
//Validación
