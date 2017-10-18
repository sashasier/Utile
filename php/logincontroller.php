<?php

include 'helpers.php';

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
unset($_SESSION['inputsValues']);

if ($_POST) {
	$_SESSION['inputsValues'] = $_POST;

	$username = trim($_POST['username']);
	if (empty($username)) {
		$errores['username'] = 'El nombre de usuario es obligatorio';
	}

	$password = trim($_POST['password']);
	if (empty($password)) {
		$errores['password'] = 'La contraseña es obligatoria';
	}

	if (!empty($username)) {
		$sql = "SELECT username, password FROM users WHERE username=('$username')";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$store_password = $result['password'];

		}	if ($result = 0) {
				$errores['username'] = 'El username no existe en la base';
		} else {
			if (password_verify($password, $store_password)) {
					$_SESSION['login'] = true;
					$errores = [];
					unset($_SESSION['errores']);
					unset($_SESSION['inputsValues']);
					include 'cookie_username.php';
					header("location: home.php");
			}else {
					$errores['password'] = 'El password no coinicide';
			}
		}

		if ($errores) {
			$_SESSION['errores'] = $errores;
			$_SESSION['inputsValues'] = $_POST;
			header('Location: login.php');
			exit;
		} else {

			if ($lg_remember = TRUE) {
					setcookie('recordar_password', 'mriera', time()+3660, '/');
				}
				$errores = [];
				unset($_SESSION['errores']);
				unset($_SESSION['inputsValues']);
				header('Location: home.php');
				exit;
		}
	}
