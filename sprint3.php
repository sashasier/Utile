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

$tablename = $_GET["table"];

// sql to create table
{$sql = "CREATE TABLE $tablename (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NULL,
    email VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    avarar_id INT(20),
    fecha_nacimiento DateTime NULL,
    estado_civil INT(10) UNSIGNED NULL DEFAULT 0,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    )";

// use exec() because no results are returned
    $con->exec($sql);
    echo "Table .$tablename. created successfully";
    }

//
$dbfile = 'json/usuarios.json';
$usuarios = getUsers($dbfile);

// var_dump($usuarios);
if (!empty($usuarios)) {
	foreach ($usuarios as $value) {
		$sql = "INSERT INTO $tablename (username, nombre, apellido, email, password)
					VALUES ('$value[username]','$value[nombre]',NULL,'$value[email]','$value[password]')";
		$query = $con->prepare($sql);
		$query->execute();
	}
}
$db = null;

?>
