<?php
session_start();

require_once("php/classes/auth.php");
require_once("php/classes/validador.php");
require_once("php/classes/DBMySQL.php");
require_once("php/classes/DBJSON.php");

$auth = new Auth();

$validador = new Validador();

$db = new DBMySQL();



?>
