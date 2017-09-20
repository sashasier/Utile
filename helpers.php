<?php


function getUserByEmail ($nombre, $path)
{
	$usuarios = getUsers($path);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['nombre'] == $nombre){
			$usuario = $usuarios[$i];
			break;
		}
	}
	return $usuario;
}
