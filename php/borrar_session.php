<?php

session_start();

function logout() {
		session_destroy();
		setcookie("username", "", -1);
	}

function recordame($email) {
		setcookie("logueado", $email, time() + 3600 * 2);
	}

session_destroy();

?>
