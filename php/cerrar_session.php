<?php

session_start();

function logout() {
		session_destroy();
		setcookie("username", "", -1);
	}

?>
