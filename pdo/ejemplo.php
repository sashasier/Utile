<?php
require 'conn.php';


$query = $db->query('select * from actors');
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($resultado);
echo '</pre>';
