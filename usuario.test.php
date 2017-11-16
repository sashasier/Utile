<?php
require_once '../classes/JSONDB.php';
require_once '../classes/DBFactory.php';
require_once '../classes/Usuario.php';

DBFactory::$db_type = 'JSONDB';

/*
$pelicula = new Pelicula(['titulo' => 'Los hombres son golpeados por el Fútbol', 'estreno' => '1994-03-09', 'genero_id' => 3]);
$pelicula->save();
exit;
*/

/*
$pelicula = Pelicula::find(5);
$pelicula->titulo = 'Avatar 3';
$pelicula->save();
*/

$usuario = Usuario::find(2);
var_dump($usuario);
