<?php
/**
 *
 */
class Usuario {
	private $id
	private $nombre
	private $email
	private $username
	private $password


	public function __construct($datos) {
	if (isset($datos["id"])) {
		$this->id = $datos["id"];
		$this->password = $datos["password"];
	}
	else {
		$this->password = password_hash($datos["password"], PASSWORD_DEFAULT);
	}

	$this->email = $datos["email"];
	$this->username = $datos["username"];

public function guardarImagen() {
	$nombre=$_FILES["avatar"]["name"];
	$archivo=$_FILES["avatar"]["tmp_name"];

	$ext = pathinfo($nombre, PATHINFO_EXTENSION);

	$miArchivo = "img/" . $this->getEmail() . "." . $ext;

	move_uploaded_file($archivo, $miArchivo);
}

public function setId($id) {
	$this->id = $id;
}

public function getId() {
	return $this->id;
}

public function setEmail($email) {
	$this->email = $email;
}

public function getEmail() {
	return $this->email;
}

public function setPassword($password) {
	$this->password = $password;
}

public function getPassword() {
	return $this->password;
}

public function setUsername($username) {
	$this->username = $username;
}

public function getUsername() {
	return $this->username;
}


}

?>

	}
	return $usuario;
}
