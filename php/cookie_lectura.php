<?php

$registrado = FALSE;
$wellcome = "Usted no se ha identificado";

if (isset($_COOKIE["username"])) {
		$wellcome = "Wellcome ".$_COOKIE["username"];
		$registrado = TRUE;
	}else{
	$wellcome = "Usted no está identificado";
}

?>
