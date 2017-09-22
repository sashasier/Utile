<?php
session_start();

require 'helpers.php';

define('DB_PATH', '../json/usuarios.json');

$errores = [];

//Validación
$nombre = trim($_POST['nombre']);
if (empty($nombre)) {
	$errores['nombre'] = 'El nombre es obligatorio';
}

$email = trim($_POST['email']);
if (empty($email)) {
	$errores['email'] = 'El email es obligatorio';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errores['email'] = 'El email ingresado no es válido';
}

$username = trim($_POST['username']);
if (empty($username)) {
	$errores['username'] = 'El username es obligatorio';
}

$password = trim($_POST['password']);
if (empty($password)) {
	$errores['password'] = 'El password es obligatorio';
}

if (getUserByEmail($email, '../json/usuarios.json')) {
	$errores['email'] = 'El email ya existe en la base';
}

if (getUserByUsername($username, '../json/usuarios.json')) {
	$errores['username'] = 'El username ya existe en la base';
}

if ($errores) {
	$_SESSION['errores'] = $errores;
	$_SESSION['inputsValues'] = $_POST;
	header('Location: ../registrarse.php');
	exit;
}

//Crear Imagen
$imageName = uniqid();
$nombreCompleto = guardarImagen('avatar', $imageName, '../imagenes/');

//Crear usuario
$usuario = [
	'nombre' => $nombre,
	'username' => $username,
	'email' => $email,
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'avatar' => $nombreCompleto
];

//Recuperar data
$usuarios = getUsers('../json/usuarios.json');

//Guardar usuario
$usuarios[] = $usuario;
$json = json_encode($usuarios);
file_put_contents(DB_PATH, $json);

function guardarImagen($inputName, $imageName, $path)
{
	if ($_FILES[$inputName]['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
		move_uploaded_file(
			$_FILES[$inputName]['tmp_name'],
			$path.$imageName.'.'.$ext
		);
		return $imageName.'.'.$ext;
	}
}

header('Location: ../exito.php');
