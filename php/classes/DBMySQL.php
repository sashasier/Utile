<?php

require_once("db.php");
require_once("usuario.php");

class DBMySQL extends DB {
  private $db;

  public function __construct() {
    $dsn = 'mysql:host=localhost;dbname=utile_db;
    charset=utf8mb4;port=3306';
    $user ="root";
    $pass = "";

    $this->db = new PDO($dsn, $user, $pass);

  /*  try {
      $this->db = new PDO($dsn, $user, $pass);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }*/

  }

  public function guardarUsuario(Usuario $usuario) {

    /*
    $query = $this->db->prepare("insert into test values(default, :nombre)");
    $query->bindValue(":nombre", "pepe", PDO::PARAM_STR);
    $query->execute();
    var_dump("listo");exit;
    */

/*
    $query = $this->db->prepare("insert into users values(default, :username, :email, :password, :nombre, :apellido, :avatar_id, :estado_civil, :fecha_nacimiento, :created_at, :updated_at)");

    $query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
		$query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
		$query->bindValue(":password", $usuario->getPassword(), PDO::PARAM_STR);
    $query->bindValue(":nombre",'pepe', PDO::PARAM_STR);
    $query->bindValue(":apellido", 'sarasa', PDO::PARAM_STR);
    $query->bindValue(":avatar_id", 1, PDO::PARAM_INT);
    $query->bindValue(":estado_civil", 1, PDO::PARAM_INT);
    $query->bindValue(":fecha_nacimiento", "holis", PDO::PARAM_STR);
    $query->bindValue(":created_at", "holis", PDO::PARAM_STR);
    $query->bindValue(":updated_at", "holis", PDO::PARAM_STR);

    $query->execute();
    var_dump("listo");exit;
*/

		$query = $this->db->prepare("insert into usuarios values(default, :username, :nombre, :apellido, :email, :password, :avatar_id, :fecha_nacimiento, :estado_civil, :created_at, :updated_at)");

    $query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
    $query->bindValue(":nombre",'pepe', PDO::PARAM_STR);
    $query->bindValue(":apellido", 'sarasa', PDO::PARAM_STR);
		$query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
		$query->bindValue(":password", $usuario->getPassword(), PDO::PARAM_STR);
    $query->bindValue(":avatar_id", 1, PDO::PARAM_INT);
    $query->bindValue(":fecha_nacimiento", "holis", PDO::PARAM_STR);
    $query->bindValue(":estado_civil", 1, PDO::PARAM_INT);
    $query->bindValue(":created_at", "holis", PDO::PARAM_STR);
    $query->bindValue(":updated_at", "holis", PDO::PARAM_STR);

		//$id = $this->db->lastInsertId();
		//$usuario->setId($id);
    // var_dump($id);exit;
		$query->execute();
		return $usuario;
  }

  public function traerTodos() {
		$query = $this->db->prepare("Select * from usuarios");
		$query->execute();

    $arrayFinal = [];

		$usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      $arrayFinal[] = new Usuario($usuario);
    }

    return $arrayFinal;
  }
  public function traerPorMail($email) {
		$query = $this->db->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuario = $query->fetch();

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }
  }
}

?>
