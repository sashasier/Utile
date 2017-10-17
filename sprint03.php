<?php

function getUsers ($pathDB)
{
	$usuarios = [];
	if (file_exists($pathDB)) {
		$json = file_get_contents($pathDB);
		$usuarios = json_decode($json, true);
	}
	return $usuarios;
}


// establecer conexión
$dsn = 'mysql:host=localhost;dbname=utile_db; charset=utf8mb4;port=3306';
$db_user = 'root';
$db_pass = '';

$con = new PDO($dsn, $db_user, $db_pass);

// cerrar conexión
$con = null; //Aunque no es necesario

// recuperar mensajes
try {    $con = new PDO($dsn, $db_user, $db_pass);
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $Exception ) {
    echo $Exception->getMessage();
}

//
$dbfile = 'json/usuarios.json';

$usuarios = getUsers($dbfile);

// var_dump($usuarios);

if (!empty($usuarios)) {
	foreach ($usuarios as $value) {
		$sql = "INSERT INTO users (username, nombre, apellido, email, password)
					VALUES ('$value[username]','$value[nombre]',NULL,'$value[email]','$value[password]')";

		$query = $con->prepare($sql);
		$query->execute();
//		$resultados = $query->fetchAll(PDO::FETCH_ASSOC);
/*		var_dump($resultados);
		var_dump("estoy en foreach");
		var_dump($value['username']);
		var_dump($value['nombre']);
		var_dump($value['email']);
		var_dump($value['password']);
*/
	}
}
$db = null;

?>
