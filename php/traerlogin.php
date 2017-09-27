<?php
$usuario = getUserByUsername($username, '../json/usuarios.json')

	if ($usuario && password_verify($password, $usuario['password'])) {
		$_SESSION['login'] = true;
	} else {
	  $errores['usuario'] = 'El usuario no existe';
	}
