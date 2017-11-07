<?php
session_start();

require 'usuario.php';

// establecer conexión
$dsn = 'mysql:host=localhost;dbname=utile_db; charset=utf8mb4;port=3306';
$db_user = 'root';
$db_pass = '';

$conn = new PDO($dsn, $db_user, $db_pass);

// cerrar conexión
$conn = null; //Aunque no es necesario

// recuperar mensajes
try { $conn = new PDO($dsn, $db_user, $db_pass);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $Exception ) {
    echo $Exception->getMessage();
}
// fin establecer conexión

$errores = [];
unset($_SESSION['errores']);

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

// Verifica si el "email" ya existe en la BD
if (!empty($email)) {
	$sql = "SELECT email FROM users WHERE email=('$email')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

}	if ($result <> FALSE) {
			$errores['email'] = 'El email ya existe en la base';
}

// Verifica si el "username" ya existe en la BD
if (!empty($username)) {
	$sql = "SELECT username FROM users WHERE username=('$username')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

}	if ($result <> 0) {
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

// Cargar usuario en la DB
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, nombre, apellido, email, password)
			VALUES ('$username','$nombre',NULL,'$email','$hash')";
	$query = $conn->prepare($sql);
	$query->execute();

$db = null;

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
$errores = [];
unset($_SESSION['errores']);
unset($_SESSION['inputsValues']);
header('Location: ../home.php');
